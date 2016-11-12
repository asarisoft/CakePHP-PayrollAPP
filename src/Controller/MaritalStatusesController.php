<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class MaritalStatusesController extends AppController
{

    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $this->set('title', 'Status Perkawinan');
    }

    public function index()
    {
        $maritalstatuses = $this->paginate($this->MaritalStatuses);

        $this->set(compact('maritalstatuses'));
        $this->set('_serialize', ['maritalstatuses']);
    }

    public function view($id = null)
    {
        $maritalstatus = $this->MaritalStatuses->get($id, [
            'contain' => []
        ]);

        $this->set('maritalstatus', $maritalstatus);
        $this->set('_serialize', ['maritalstatus']);
    }

    public function add()
    {
        $maritalstatus = $this->MaritalStatuses->newEntity();
        if ($this->request->is('post')) {
            $maritalstatus = $this->MaritalStatuses->patchEntity($maritalstatus, $this->request->data);
            if ($this->MaritalStatuses->save($maritalstatus)) {
                $this->setSuccesMessage('succes-save');

                return $this->redirect(['action' => 'index']);
            } else {
                $this->setErrorMessage('failed-save');
            }
        }
        $this->set(compact('maritalstatus'));
        $this->set('_serialize', ['maritalstatus']);
    }

    public function edit($id = null)
    {
        $maritalstatus = $this->MaritalStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $maritalstatus = $this->MaritalStatuses->patchEntity($maritalstatus, $this->request->data);
            if ($this->MaritalStatuses->save($maritalstatus)) {
                $this->setSuccesMessage('succes-save');

                return $this->redirect(['action' => 'index']);
            } else {
                $this->setErrorMessage('failed-save');
            }
        }
        $this->set(compact('maritalstatus'));
        $this->set('_serialize', ['maritalstatus']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $maritalstatus = $this->MaritalStatuses->get($id);
        if ($this->MaritalStatuses->delete($maritalstatus)) {
            $this->setSuccesMessage('succes-delete');
        } else {
            $this->setErrorMessage('failed-delete');
        }

        return $this->redirect(['action' => 'index']);
    }
}
