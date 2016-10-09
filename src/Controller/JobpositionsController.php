<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jobpositions Controller
 *
 * @property \App\Model\Table\JobpositionsTable $Jobpositions
 */
class JobpositionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $jobpositions = $this->paginate($this->Jobpositions);

        $this->set(compact('jobpositions'));
        $this->set('_serialize', ['jobpositions']);
    }

    /**
     * View method
     *
     * @param string|null $id Jobposition id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jobposition = $this->Jobpositions->get($id, [
            'contain' => []
        ]);

        $this->set('jobposition', $jobposition);
        $this->set('_serialize', ['jobposition']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jobposition = $this->Jobpositions->newEntity();
        if ($this->request->is('post')) {
            $jobposition = $this->Jobpositions->patchEntity($jobposition, $this->request->data);
            if ($this->Jobpositions->save($jobposition)) {
                $this->Flash->success(__('The jobposition has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The jobposition could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('jobposition'));
        $this->set('_serialize', ['jobposition']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Jobposition id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jobposition = $this->Jobpositions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jobposition = $this->Jobpositions->patchEntity($jobposition, $this->request->data);
            if ($this->Jobpositions->save($jobposition)) {
                $this->Flash->success(__('The jobposition has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The jobposition could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('jobposition'));
        $this->set('_serialize', ['jobposition']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Jobposition id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jobposition = $this->Jobpositions->get($id);
        if ($this->Jobpositions->delete($jobposition)) {
            $this->Flash->success(__('The jobposition has been deleted.'));
        } else {
            $this->Flash->error(__('The jobposition could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
