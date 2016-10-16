<?php
namespace App\Controller;

use App\Controller\AppController;

class MaritalStatusesController extends AppController
{
    public function index()
    {
        $maritalstatuses = $this->paginate($this->Maritalstatuses);

        $this->set(compact('maritalstatuses'));
        $this->set('_serialize', ['maritalstatuses']);
    }

    public function view($id = null)
    {
        $maritalstatus = $this->Maritalstatuses->get($id, [
            'contain' => []
        ]);

        $this->set('maritalstatus', $maritalstatus);
        $this->set('_serialize', ['maritalstatus']);
    }

    public function add()
    {
        $maritalstatus = $this->Maritalstatuses->newEntity();
        if ($this->request->is('post')) {
            $maritalstatus = $this->Maritalstatuses->patchEntity($maritalstatus, $this->request->data);
            if ($this->Maritalstatuses->save($maritalstatus)) {
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
        $maritalstatus = $this->Maritalstatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $maritalstatus = $this->Maritalstatuses->patchEntity($maritalstatus, $this->request->data);
            if ($this->Maritalstatuses->save($maritalstatus)) {
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
        $maritalstatus = $this->Maritalstatuses->get($id);
        if ($this->Maritalstatuses->delete($maritalstatus)) {
            $this->Flash->success(__('The maritalstatus has been deleted.'));
        } else {
            $this->Flash->error(__('The maritalstatus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
