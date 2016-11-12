<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class UsersController extends AppController
{   

    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $this->set('title', 'Pegawai');
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Transports', 'JobPositions', 'MaritalStatuses', 'Educations'],
            'limit'=> 20

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

    public function deactivate($id = null)
    {
        $this->request->allowMethod(['post', 'cancel']);
        $user = $this->Users->get($id);
        $user->is_active = 0;
        if ($this->Users->save($user)) {
            $this->Flash->success(__('Pegawai telah dinonaktifkan.'));
        } else {
            $this->Flash->error(__('Gagal menonaktifkan pegawai, silahkan coba lagi.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->setSuccesMessage('succes-save');

                return $this->redirect(['action' => 'index']);
            } else {
               $this->setErrorMessage('failed-save');
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
                $this->setSuccesMessage('succes-save');

                return $this->redirect(['action' => 'index']);
            } else {
               $this->setErrorMessage('failed-save');
            }
        }
        $transports = $this->Users->Transports->find('list', ['limit' => 200]);
        $jobPositions = $this->Users->JobPositions->find('list', ['limit' => 200]);
        $maritalStatuses = $this->Users->MaritalStatuses->find('list', ['limit' => 200]);
        $educations = $this->Users->Educations->find('list', ['limit' => 200]);
        $this->set(compact('user', 'transports', 'jobPositions', 'maritalStatuses', 'educations'));
        $this->set('_serialize', ['user']);
    }

    // public function delete($id = null)
    // {
    //     $this->request->allowMethod(['post', 'delete']);
    //     $user = $this->Users->get($id);
    //     if ($this->Users->delete($user)) {
    //         $this->Flash->success(__('The user has been deleted.'));
    //     } else {
    //         $this->Flash->error(__('The user could not be deleted. Please, try again.'));
    //     }

    //     return $this->redirect(['action' => 'index']);
    // }


    public function login() {   
        
        // this will ignore to render default layout
        $this->viewBuilder()->autoLayout(false);

        // this will change default.ctp be advanced.ctp
        // $this->viewBuilder()->layout('advanced');

        if (isset($this->Auth) && $this->Auth->user()){
            return $this->redirect($this->Auth->redirectUrl());
        }

        if ($this->request->is('post')) {
           $user = $this->Auth->identify();
            if ($user) {
               $this->Auth->setUser($user);
               return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error(__('Username dan password salah'), [
                    'key' => 'auth'
                ]); 
            }
        }

        // This will render Other view in users template
        $this -> render('login2');
   }

   public function logout()
   {
       return $this->redirect($this->Auth->logout());
   }

}
