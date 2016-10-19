<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;
// use Cake\I18n\Time;
use Cake\I18n\Date;
use Cake\ORM\TableRegistry;

class PayrollsController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $payrolls = $this->paginate($this->Payrolls->find('all')->where(['status' => 0]));
        $this->set(compact('payrolls'));
        $this->set('_serialize', ['payrolls']);

        $users = TableRegistry::get('Users');
    }

    public function view($id = null)
    {
        $payroll = $this->Payrolls->get($id, [
            'contain' => ['Users']
        ]);

        $other_allowances = $this->Payrolls->salaryallowances->find('all', [
            "conditions" => ['payrolls_id' => $id]]);
        $this->set('other_allowances', $other_allowances);

        $this->set('payroll', $payroll);
        $this->set('_serialize', ['payroll']);
    }

    public function add()
    {
        $payroll = $this->Payrolls->newEntity();
        if ($this->request->is('post')) {
            $payroll = $this->Payrolls->newEntity($this->request->data, [
                'validate' => false,
                'associated' => ['SalaryAllowances']
            ]);
            $payroll->year = $this->request->data['Payrolls']['year']['year'];
            $payroll->month = $this->request->data['Payrolls']['month']['month'];
            if ($this->Payrolls->save($payroll)) {
                $this->Flash->success(__('The payroll has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The payroll could not be saved. Please, try again.'));
            }
        }
        $users = $this->Payrolls->Users->find('list', ['limit' => 200]);
        $this->set(compact('payroll', 'users'));
        $this->set('_serialize', ['payroll']);
    }

    public function edit($id = null)
    {
        $payroll = $this->Payrolls->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $payroll = $this->Payrolls->patchEntity($payroll, $this->request->data);
            $payroll->year = $this->request->data['year']['year'];
            $payroll->month = $this->request->data['month']['month'];
            if ($this->Payrolls->save($payroll)) {
                $this->Flash->success(__('The payroll has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The payroll could not be saved. Please, try again.'));
            }
        }
        $users = $this->Payrolls->Users->find('list', ['limit' => 200]);
        $this->set(compact('payroll', 'users'));
        $this->set('_serialize', ['payroll']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $payroll = $this->Payrolls->get($id);
        if ($this->Payrolls->delete($payroll)) {
            $this->Flash->success(__('The payroll has been deleted.'));
        } else {
            $this->Flash->error(__('The payroll could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function cancel($id = null)
    {
        $this->request->allowMethod(['post', 'cancel']);
        $payroll = $this->Payrolls->get($id);
        $payroll->status = 1;
        if ($this->Payrolls->save($payroll)) {
            $this->Flash->success(__('The payroll has been canceled.'));
        } else {
            $this->Flash->error(__('The payroll could not be caneled. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function populate() {
        $Users = TableRegistry::get('Users');
        if ($this->request->is('ajax')) {
            $user_id = $this->request->data['Payrolls']['users_id'];
            $month = $this->request->data['Payrolls']['month']['month'];
            $year = $this->request->data['Payrolls']['year']['year'];

            # Get Basic Salary
            $user = $Users
                ->find()
                ->contain(['JobPositions', 'Educations', 'MaritalStatuses', 'Transports', 'Allowances'])
                ->matching('Allowances')
                ->where([
                    'Users.id' => $user_id,
                ])->last();

            $this->set('basic_salary',  $user->basic_salary);
            $this->set('position_allowance', $user->job_position->position_allowance);
            $this->set('communication_allowance', $user->job_position->communication_allowance);
            $this->set('education_allowance', $user->education->education_allowance);
            $this->set('transport_allowance', $user->transport->transport_allowance);

            # Get Rice Allowances
            if (date_diff(Date::now(), new Date($user->tmt))->y >= $user->marital_status->after_years) {
                $this->set('rice_allowance', $user->marital_status->rice_allowance);
            } else {
                $this->set('rice_allowance', 0);
            }

            # Get Other Allowance
            $other_allowances = $Users->allowances->find('all', [
                "conditions" => ['users_id' => $user_id]]);
            $this->set('other_allowances', $other_allowances);

            # Gate Collector Share Profit
            $this->render('ajax_response', 'ajax');
        }

    }


}
