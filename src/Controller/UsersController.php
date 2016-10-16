<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class UsersController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'contain' => ['Transports', 'JobPositions', 'MaritalStatuses', 'Educations']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }


    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Transports', 'JobPositions', 'MaritalStatuses', 'Educations']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $transports = $this->Users->Transports->find('list', ['limit' => 200]);
        $jobPositions = $this->Users->JobPositions->find('list', ['limit' => 200]);
        $maritalStatuses = $this->Users->MaritalStatuses->find('list', ['limit' => 200]);
        $educations = $this->Users->Educations->find('list', ['limit' => 200]);
        $this->set(compact('user', 'transports', 'jobPositions', 'maritalStatuses', 'educations'));
        $this->set('_serialize', ['user']);
    }

    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $transports = $this->Users->Transports->find('list', ['limit' => 200]);
        $jobPositions = $this->Users->JobPositions->find('list', ['limit' => 200]);
        $maritalStatuses = $this->Users->MaritalStatuses->find('list', ['limit' => 200]);
        $educations = $this->Users->Educations->find('list', ['limit' => 200]);
        $this->set(compact('user', 'transports', 'jobPositions', 'maritalStatuses', 'educations'));
        $this->set('_serialize', ['user']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function login()
    {
       if ($this->request->is('post')) {
           $user = $this->Auth->identify();
           if ($user) {
               $this->Auth->setUser($user);
               return $this->redirect($this->Auth->redirectUrl());
           }
           $this->Flash->error(__('Invalid username or password, try again'));
       }
   }

   public function logout()
   {
       return $this->redirect($this->Auth->logout());
   }

}
