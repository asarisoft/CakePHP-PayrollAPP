<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;


class UsersController extends AppController
{   

    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $privileges = array(1 => 'Administrator', 2=>'Manager', 3 => 'Pegawai');
        $this->set('title', 'Pegawai');
        $this->set('privileges', $privileges);
    }

    public function index()
    {
        $this->__isAdmin();
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
        $this->__isAdmin();
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
        $this->__isAdmin();
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            $user = $this->Users->save($user);
            if ($user) {
                $user_id = $user['id'];

                //Generate Default Allowances
                $Allowances = TableRegistry::get('Allowances');
                $listAllowance = ['Over Time/Lembur', 'Insentif Funding', 'Insentif Lending', 
                                  'Insentif Target Kolektif', 'Gratifikasi/Bonus'];
                for($x=0; $x < count($listAllowance); $x++) {
                    $newData = ['users_id' => $user_id,
                                'name' => $listAllowance[$x],
                                'value' => 0];
                    $allowance = $Allowances->patchEntity($Allowances->newEntity(), $newData);
                    $Allowances->save($allowance);
                }

                // Generate Default Deductions
                $Deductions = TableRegistry::get('Deductions');
                $listDeduction = ['Zakat Penghasilan', 'Angsuran Pokok Pembiayaan', 
                                   'Angsuran Bagi Hasil Pembiayaan', 'Setoran BPJS Tenaga Kerja', 
                                   'Tabungan Pensiun', 'Arisan', 'Kas Karyawan', 'Alpha / Absen' ];
                for($x=0; $x < count($listDeduction); $x++) {
                    $newData = ['users_id' => $user_id,
                                'name' => $listDeduction[$x],
                                'value' => 0];
                    $deduction = $Deductions->patchEntity($Deductions->newEntity(), $newData);
                    $Deductions->save($deduction);
                }

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
        $this->set(compact('user', 'transports', 'jobPositions', 'maritalStatuses', 
                   'educations'));
        $this->set('_serialize', ['user']);
    }

    public function edit($id = null)
    {
        $this->__isAdmin();
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
                $this->Flash->error(__('Username / password salah'), [
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

    public function changePassword() { 
        $this->__isAdmin();
        $user= $this->Users->get($this->Auth->user('id')); 
        if (!empty($this->request->data)) { 
            $user = $this->Users->patchEntity($user, $this->request->data, ['validate' => 'password']); 
            if ($this->Users->save($user)) { 
                $this->Flash->success('Password berhasil diubah!'); 
            } else {
                $this->Flash->error(__('Password gagal diubah')); 
            }
        } 
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    } 
}
