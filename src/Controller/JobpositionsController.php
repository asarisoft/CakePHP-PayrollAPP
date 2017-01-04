<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class JobPositionsController extends AppController
{

    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $this->set('title', 'Jabatan');
        $this->__isAdmin();
    }

    public function index()
    {
        $jobpositions = $this->paginate($this->JobPositions);

        $this->set(compact('jobpositions'));
        $this->set('_serialize', ['jobpositions']);
    }

    public function view($id = null)
    {
        $jobposition = $this->JobPositions->get($id, [
            'contain' => []
        ]);

        $this->set('jobposition', $jobposition);
        $this->set('_serialize', ['jobposition']);
    }

    public function add()
    {
        $jobposition = $this->JobPositions->newEntity();
        if ($this->request->is('post')) {
            $jobposition = $this->JobPositions->patchEntity($jobposition, $this->request->data);
            if ($this->JobPositions->save($jobposition)) {
                $this->setSuccesMessage('succes-save');

                return $this->redirect(['action' => 'index']);
            } else {
               $this->setErrorMessage('failed-save');
            }
        }
        $this->set(compact('jobposition'));
        $this->set('_serialize', ['jobposition']);
    }


    public function edit($id = null)
    {
        $jobposition = $this->JobPositions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jobposition = $this->JobPositions->patchEntity($jobposition, $this->request->data);
            if ($this->JobPositions->save($jobposition)) {
                $this->setSuccesMessage('succes-save');

                return $this->redirect(['action' => 'index']);
            } else {
                $this->setErrorMessage('failed-save');
            }
        }
        $this->set(compact('jobposition'));
        $this->set('_serialize', ['jobposition']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jobposition = $this->JobPositions->get($id);
        if ($this->JobPositions->delete($jobposition)) {
            $this->setSuccesMessage('succes-delete');
        } else {
            $this->setErrorMessage('failed-delete');
        }

        return $this->redirect(['action' => 'index']);
    }
}
