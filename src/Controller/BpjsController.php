<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class BpjsController extends AppController
{

    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $this->set('title', 'BPJS');
        $this->__isAdmin();
    }

    public function index()
    {
        $bpjs = $this->paginate($this->Bpjs);

        $this->set(compact('bpjs'));
        $this->set('_serialize', ['bpjs']);
    }

    public function view($id = null)
    {
        $bpj = $this->Bpjs->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('bpj', $bpj);
        $this->set('_serialize', ['bpj']);
    }

    public function add()
    {   
        $bpj = $this->Bpjs->newEntity();
        if ($this->request->is('post')) {
            $bpj = $this->Bpjs->patchEntity($bpj, $this->request->data);
            if ($this->Bpjs->save($bpj)) {
                $this->setSuccesMessage('succes-save');

                return $this->redirect(['action' => 'index']);
            } else {
               $this->setErrorMessage('failed-save');
            }
        }
        $users = $this->Bpjs->Users->find('list')
            ->where(['username !=' => 'admin', 'is_active !=' => 0]);
        $this->set(compact('bpj', 'users'));
        $this->set('_serialize', ['bpj']);
    }


    public function edit($id = null)
    {
        $bpj = $this->Bpjs->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bpj = $this->Bpjs->patchEntity($bpj, $this->request->data);
            if ($this->Bpjs->save($bpj)) {
                $this->setSuccesMessage('succes-save');

                return $this->redirect(['action' => 'index']);
            } else {
               $this->setErrorMessage('failed-save');
            }
        }
        $users = $this->Bpjs->Users->find('list')
            ->where(['username !=' => 'admin', 'is_active !=' => 0]);
        $this->set(compact('bpj', 'users'));
        $this->set('_serialize', ['bpj']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bpj = $this->Bpjs->get($id);
        if ($this->Bpjs->delete($bpj)) {
            $this->setSuccesMessage('succes-delete');
        } else {
            $this->setErrorMessage('failed-delete');
        }

        return $this->redirect(['action' => 'index']);
    }
}
