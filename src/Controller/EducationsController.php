<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class EducationsController extends AppController
{
    
    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $this->set('title', 'Pendidikan');
        $this->__isAdmin();
    }

    public function index()
    {
        $educations = $this->paginate($this->Educations);

        $this->set(compact('educations'));
        $this->set('_serialize', ['educations']);
    }

    public function view($id = null)
    {
        $education = $this->Educations->get($id, [
            'contain' => []
        ]);

        $this->set('education', $education);
        $this->set('_serialize', ['education']);
    }

    public function add()
    {
        $education = $this->Educations->newEntity();
        if ($this->request->is('post')) {
            $education = $this->Educations->patchEntity($education, $this->request->data);
            if ($this->Educations->save($education)) {
                $this->setSuccesMessage('succes-save');

                return $this->redirect(['action' => 'index']);
            } else {
                $this->setErrorMessage('failed-save');
            }
        }
        $this->set(compact('education'));
        $this->set('_serialize', ['education']);
    }

    public function edit($id = null)
    {
        $education = $this->Educations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $education = $this->Educations->patchEntity($education, $this->request->data);
            if ($this->Educations->save($education)) {
                $this->setSuccesMessage('succes-save');

                return $this->redirect(['action' => 'index']);
            } else {
                $this->setErrorMessage('failed-save');
            }
        }
        $this->set(compact('education'));
        $this->set('_serialize', ['education']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $education = $this->Educations->get($id);
        if ($this->Educations->delete($education)) {
            $this->setSuccesMessage('succes-delete');
        } else {
            $this->setErrorMessage('failed-delete');
        }

        return $this->redirect(['action' => 'index']);
    }
}
