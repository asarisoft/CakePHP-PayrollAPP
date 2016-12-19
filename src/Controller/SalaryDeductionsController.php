<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SalaryDeductions Controller
 *
 * @property \App\Model\Table\SalaryDeductionsTable $SalaryDeductions
 */
class SalaryDeductionsController extends AppController
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
        $salaryDeductions = $this->paginate($this->SalaryDeductions);

        $this->set(compact('salaryDeductions'));
        $this->set('_serialize', ['salaryDeductions']);
    }

    /**
     * View method
     *
     * @param string|null $id Salary Deduction id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salaryDeduction = $this->SalaryDeductions->get($id, [
            'contain' => ['Payrolls']
        ]);

        $this->set('salaryDeduction', $salaryDeduction);
        $this->set('_serialize', ['salaryDeduction']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salaryDeduction = $this->SalaryDeductions->newEntity();
        if ($this->request->is('post')) {
            $salaryDeduction = $this->SalaryDeductions->patchEntity($salaryDeduction, $this->request->data);
            if ($this->SalaryDeductions->save($salaryDeduction)) {
                $this->Flash->success(__('The salary deduction has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The salary deduction could not be saved. Please, try again.'));
            }
        }
        $payrolls = $this->SalaryDeductions->Payrolls->find('list', ['limit' => 200]);
        $this->set(compact('salaryDeduction', 'payrolls'));
        $this->set('_serialize', ['salaryDeduction']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Salary Deduction id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salaryDeduction = $this->SalaryDeductions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salaryDeduction = $this->SalaryDeductions->patchEntity($salaryDeduction, $this->request->data);
            if ($this->SalaryDeductions->save($salaryDeduction)) {
                $this->Flash->success(__('The salary deduction has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The salary deduction could not be saved. Please, try again.'));
            }
        }
        $payrolls = $this->SalaryDeductions->Payrolls->find('list', ['limit' => 200]);
        $this->set(compact('salaryDeduction', 'payrolls'));
        $this->set('_serialize', ['salaryDeduction']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Salary Deduction id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salaryDeduction = $this->SalaryDeductions->get($id);
        if ($this->SalaryDeductions->delete($salaryDeduction)) {
            $this->Flash->success(__('The salary deduction has been deleted.'));
        } else {
            $this->Flash->error(__('The salary deduction could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
