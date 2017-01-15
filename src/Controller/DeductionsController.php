<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class DeductionsController extends AppController
{

    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $this->set('title', 'Potongan');
    }


    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];

        $query = $this->Deductions->find();
        if (!empty ($this->request->query("user_id"))) {
            $query->where(['users_id'=>$this->request->query("user_id")]);
        }
        $deductions = $this->paginate($query);

        $users = $this->Deductions->Users->find('list')
            ->where(['username !=' => 'admin', 'is_active !=' => 0]);

        $this->set(compact('deductions', 'users'));
        $this->set('_serialize', ['deductions']);
    }

    public function view($id = null)
    {
        $deduction = $this->Deductions->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('deduction', $deduction);
        $this->set('_serialize', ['deduction']);
    }

    public function add()
    {
        $deduction = $this->Deductions->newEntity();
        if ($this->request->is('post')) {
            $deduction = $this->Deductions->patchEntity($deduction, $this->request->data);
            if ($this->Deductions->save($deduction)) {
                $this->setSuccesMessage('succes-save');

                return $this->redirect(['action' => 'index']);
            } else {
                $this->setErrorMessage('failed-save');
            }
        }
        $users = $this->Deductions->Users->find('list')
            ->where(['username !=' => 'admin', 'is_active !=' => 0]);
        $this->set(compact('deduction', 'users'));
        $this->set('_serialize', ['deduction']);
    }

    public function edit($id = null)
    {
        $deduction = $this->Deductions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deduction = $this->Deductions->patchEntity($deduction, $this->request->data);
            if ($this->Deductions->save($deduction)) {
                $this->setSuccesMessage('succes-save');

                return $this->redirect(['action' => 'index']);
            } else {
                $this->setErrorMessage('failed-save');
            }
        }
        $users = $this->Deductions->Users->find('list')
            ->where(['username !=' => 'admin', 'is_active !=' => 0]);
        $this->set(compact('deduction', 'users'));
        $this->set('_serialize', ['deduction']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $deduction = $this->Deductions->get($id);
        if ($this->Deductions->delete($deduction)) {
           $this->setSuccesMessage('succes-delete');
        } else {
            $this->setErrorMessage('failed-delete');
        }

        return $this->redirect(['action' => 'index']);
    }
}
