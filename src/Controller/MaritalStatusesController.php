<?php
namespace App\Controller;

use App\Controller\AppController;

class MaritalStatusesController extends AppController
{
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
                $this->Flash->success(__('The maritalstatus has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The maritalstatus could not be saved. Please, try again.'));
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
                $this->Flash->success(__('The maritalstatus has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The maritalstatus could not be saved. Please, try again.'));
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
            $this->Flash->success(__('The maritalstatus has been deleted.'));
        } else {
            $this->Flash->error(__('The maritalstatus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
