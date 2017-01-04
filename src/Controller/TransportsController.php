<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class TransportsController extends AppController
{

    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $this->set('title', 'Transportasi');
        $this->__isAdmin();
    }

    public function index()
    {
        $transports = $this->paginate($this->Transports);

        $this->set(compact('transports'));
        $this->set('_serialize', ['transports']);
    }

    public function view($id = null)
    {
        $transport = $this->Transports->get($id, [
            'contain' => []
        ]);

        $this->set('transport', $transport);
        $this->set('_serialize', ['transport']);
    }

    public function add()
    {
        $transport = $this->Transports->newEntity();
        if ($this->request->is('post')) {
            $transport = $this->Transports->patchEntity($transport, $this->request->data);
            if ($this->Transports->save($transport)) {
                $this->setSuccesMessage('succes-save');

                return $this->redirect(['action' => 'index']);
            } else {
               $this->setErrorMessage('failed-save');
            }
        }
        $this->set(compact('transport'));
        $this->set('_serialize', ['transport']);
    }

    public function edit($id = null)
    {
        $transport = $this->Transports->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transport = $this->Transports->patchEntity($transport, $this->request->data);
            if ($this->Transports->save($transport)) {
                $this->setSuccesMessage('succes-save');

                return $this->redirect(['action' => 'index']);
            } else {
               $this->setErrorMessage('failed-save');
            }
        }
        $this->set(compact('transport'));
        $this->set('_serialize', ['transport']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transport = $this->Transports->get($id);
        if ($this->Transports->delete($transport)) {
            $this->setSuccesMessage('succes-delete');
        } else {
            $this->setErrorMessage('failed-delete');
        }

        return $this->redirect(['action' => 'index']);
    }
}
