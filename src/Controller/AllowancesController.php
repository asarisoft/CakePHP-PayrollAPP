<?php
namespace App\Controller;

use App\Controller\AppController;


class AllowancesController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
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
                $this->Flash->success(__('The allowance has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The allowance could not be saved. Please, try again.'));
            }
        }
        $users = $this->Allowances->Users->find('list', ['limit' => 200]);
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
                $this->Flash->success(__('The allowance has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The allowance could not be saved. Please, try again.'));
            }
        }
        $users = $this->Allowances->Users->find('list', ['limit' => 200]);
        $this->set(compact('allowance', 'users'));
        $this->set('_serialize', ['allowance']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $allowance = $this->Allowances->get($id);
        if ($this->Allowances->delete($allowance)) {
            $this->Flash->success(__('The allowance has been deleted.'));
        } else {
            $this->Flash->error(__('The allowance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
