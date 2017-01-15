<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Payrolls',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
        ]);

    }

    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }

    }

    public function beforeFilter(Event $event) {
        $user = $this->Auth->user();
        if($user != null) {
            $username = $user['username'];
        }
        $this->set(compact('username'));
    }

    public function setSuccesMessage($type="", $message="") {
        $message = $message;
        if ($type == "succes-save") {
            $message = "Data Berhasil Disimpan";
        } elseif ($type == "succes-delete") {
            $message = "Data telah dihapus.";
        } 
        $this->Flash->success(__($message));
    }

    public function setErrorMEssage($type="", $message="") {
        $message = $message;
        if ($type == "failed-save") {
            $message = "Gagal menyimpan data, silahkan coba lagi";
        } elseif ($type == "failed-delete") {
            $message = "Gagal menghapus data, silahkan coba lagi.";
        }
        
        $this->Flash->error(__($message));
    }

    protected function __isAdmin(){
        if($this->Auth->user()){
            if($this->Auth->user()['username'] == 'admin'){
                return true;
            }
        }
        $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }
}
