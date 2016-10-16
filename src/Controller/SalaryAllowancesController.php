<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SalaryAllowances Controller
 *
 * @property \App\Model\Table\SalaryAllowancesTable $SalaryAllowances
 */
class SalaryAllowancesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Payrolls']
        ];
        $salaryAllowances = $this->paginate($this->SalaryAllowances);

        $this->set(compact('salaryAllowances'));
        $this->set('_serialize', ['salaryAllowances']);
    }

    /**
     * View method
     *
     * @param string|null $id Salary Allowance id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salaryAllowance = $this->SalaryAllowances->get($id, [
            'contain' => ['Payrolls']
        ]);

        $this->set('salaryAllowance', $salaryAllowance);
        $this->set('_serialize', ['salaryAllowance']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salaryAllowance = $this->SalaryAllowances->newEntity();
        if ($this->request->is('post')) {
            $salaryAllowance = $this->SalaryAllowances->patchEntity($salaryAllowance, $this->request->data);
            if ($this->SalaryAllowances->save($salaryAllowance)) {
                $this->Flash->success(__('The salary allowance has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The salary allowance could not be saved. Please, try again.'));
            }
        }
        $payrolls = $this->SalaryAllowances->Payrolls->find('list', ['limit' => 200]);
        $this->set(compact('salaryAllowance', 'payrolls'));
        $this->set('_serialize', ['salaryAllowance']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Salary Allowance id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salaryAllowance = $this->SalaryAllowances->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salaryAllowance = $this->SalaryAllowances->patchEntity($salaryAllowance, $this->request->data);
            if ($this->SalaryAllowances->save($salaryAllowance)) {
                $this->Flash->success(__('The salary allowance has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The salary allowance could not be saved. Please, try again.'));
            }
        }
        $payrolls = $this->SalaryAllowances->Payrolls->find('list', ['limit' => 200]);
        $this->set(compact('salaryAllowance', 'payrolls'));
        $this->set('_serialize', ['salaryAllowance']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Salary Allowance id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salaryAllowance = $this->SalaryAllowances->get($id);
        if ($this->SalaryAllowances->delete($salaryAllowance)) {
            $this->Flash->success(__('The salary allowance has been deleted.'));
        } else {
            $this->Flash->error(__('The salary allowance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
