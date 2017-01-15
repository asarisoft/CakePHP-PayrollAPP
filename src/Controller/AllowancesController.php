<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class AllowancesController extends AppController
{

    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $this->set('title', 'Tambahan Gaji');
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
            'limit'=>20
        ];
        $allowances = $this->paginate($this->Allowances);

        $this->set(compact('allowances'));
        $this->set('_serialize', ['allowances']);
    }

    public function view($id = null)
    {
        $allowance = $this->Allowances->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('allowance', $allowance);
        $this->set('_serialize', ['allowance']);
    }

    public function add()
    {
        $allowance = $this->Allowances->newEntity();
        if ($this->request->is('post')) {
            $allowance = $this->Allowances->patchEntity($allowance, $this->request->data);
            if ($this->Allowances->save($allowance)) {
                $this->setSuccesMessage('succes-save');

                return $this->redirect(['action' => 'index']);
            } else {
               $this->setErrorMessage('failed-save');
            }
        }
        $users = $this->Allowances->Users->find('list')
            ->where(['username !=' => 'admin', 'is_active !=' => 0]);
        $this->set(compact('allowance', 'users'));
        $this->set('_serialize', ['allowance']);
    }

    public function edit($id = null)
    {
        $allowance = $this->Allowances->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $allowance = $this->Allowances->patchEntity($allowance, $this->request->data);
            if ($this->Allowances->save($allowance)) {
                $this->setSuccesMessage('succes-save');

                return $this->redirect(['action' => 'index']);
            } else {
               $this->setErrorMessage('failed-save');
            }
        }
        $users = $this->Allowances->Users->find('list')
            ->where(['username !=' => 'admin', 'is_active !=' => 0]);
        $this->set(compact('allowance', 'users'));
        $this->set('_serialize', ['allowance']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $allowance = $this->Allowances->get($id);
        if ($this->Allowances->delete($allowance)) {
            $this->setSuccesMessage('succes-delete');
        } else {
            $this->setErrorMessage('failed-delete');
        }

        return $this->redirect(['action' => 'index']);
    }
}
