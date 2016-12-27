<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\I18n\Date;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

class PayrollsController extends AppController
{

    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $this->set('title', 'Daftar Gaji');
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'salaryallowances'],
            'limit'=>10
        ];

        $query = $this->Payrolls->find()->order(['Payrolls.id' =>'DESC']);
        if (!empty ($this->request->query("Payrolls"))) {
            $data=$this->request->query("Payrolls");
            $query->where(['year'=>$data['year']['year']])
                ->where(['month' => $data['month']['month']])
                ->where(['status' => $data['status']]);

            if ($data['request_to_export']==1) {
                $this->response->download('Payroll.csv');
                $_header = ['Nama', 'Bulan', 'Tahun', 'Gaji Pokok', 'Tunjangan Jabatan', 
                            'Tunjangan Komunikasi','Tunjangan Beras', 'Tunjangan Pendidikan', 
                            'Tunjangan Transportasi', 'Bagi Hasil Kolektor'];

                // Add Header With Other ALlowances
                $SalaryAllowances = TableRegistry::get('SalaryAllowances');
                $salaryAllowancesName = $SalaryAllowances->find(
                    'list', ['select'=> 'name', 'order' => ['name' => 'ASC']]);
                $_header = array_merge($_header, array_unique($salaryAllowancesName->toArray()));

                // Get Payroll Data
                $payroll_data = $query->contain(['Users', 'salaryallowances'])->toArray();
                $content=[];
                foreach ($payroll_data as $payroll) {
                    $row = [
                        $payroll['user']['name'], $payroll['month'], $payroll['year'], 
                        $payroll['basic_salary'], $payroll['position_allowance'],
                        $payroll['communication_allowance'], $payroll['rice_allowance'], 
                        $payroll['education_allowance'], $payroll['transport_allowance'],
                        $payroll['transport_allowance']
                    ];

                    // try to add 0, in rest off index row 
                    $row = array_merge($row, array_fill(0, count($_header) - count($row), 0));

                    // Add SalaryAllowances to row
                    foreach ($payroll['salaryallowances'] as $allowance) {
                        $row[array_search($allowance['name'], $_header)] =  $allowance['value'];
                    }

                    array_push($content, $row);
                }
                $_serialize = 'content';
                // if need footer
                // $_footer = ['Totals', '400', '$3000'];

                $this->viewBuilder()->className('CsvView.Csv');
                $this->set(compact('content', '_serialize', '_header'));
                return;
            }
        }

        $payrolls = $this->paginate($query);
        $this->set(compact('payrolls'));
        $this->set('_serialize', ['payrolls']);
    }

    public function view($id = null, $print=false)
    {
        $payroll = $this->Payrolls->get($id, [
            'contain' => ['Users']
        ]);

        $total = $payroll->basic_salary + $payroll->position_allowance +
            $payroll->communication_allowance + $payroll->rice_allowance +
            $payroll->education_allowance + $payroll->transport_allowance;

        $other_allowances = $this->Payrolls->salaryallowances->find('all', [
            "conditions" => ['payrolls_id' => $id]]);
        $this->set('other_allowances', $other_allowances);
        foreach ($other_allowances as $other_allowance) {
            $total += $other_allowance->value;
        }

        $salary_deductions = $this->Payrolls->salarydeductions->find('all', [
            "conditions" => ['payrolls_id' => $id]]);
        $this->set('salary_deductions', $salary_deductions);
        foreach ($salary_deductions as $salary_deduction) {
            $total -= $salary_deduction->value;
        }

        $this->set(compact('payroll', 'total'));
        $this->set('_serialize', ['payroll']);

        if ($print) {
            $this->viewBuilder()->layout('ajax');
            $this->render('print2');
        }
    }

    public function add()
    {
        $payroll = $this->Payrolls->newEntity();
        if ($this->request->is('post')) {
            $payroll = $this->Payrolls->newEntity($this->request->data, [
                'associated' => ['SalaryAllowances', 'SalaryDeductions']
            ]);
            $payroll->year = $this->request->data['Payrolls']['year']['year'];
            $payroll->month = $this->request->data['Payrolls']['month']['month'];
            $payroll->status = 0;

            // debug($payroll);
            if ($this->Payrolls->save($payroll)) {
                $this->setSuccesMessage('succes-save');
                return $this->redirect(['action' => 'index']);

            } else {
                $this->setErrorMessage('failed-save');
            }
        }
        $users = $this->Payrolls->Users->find('list')
            ->where(['username !=' => 'admin', 'is_active !=' => 0]);

        $this->set(compact('payroll', 'users'));
        $this->set('_serialize', ['payroll']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $payroll = $this->Payrolls->get($id);
        if ($this->Payrolls->delete($payroll)) {
            $this->setSuccesMessage('succes-delete');
        } else {
            $this->setErrorMessage('failed-delete');
        }

        return $this->redirect(['action' => 'index']);
    }

    public function cancel($id = null)
    {
        $this->request->allowMethod(['post', 'cancel']);
        $payroll = $this->Payrolls->get($id);
        $payroll->status = 1;
        if ($this->Payrolls->save($payroll)) {
            $this->Flash->success(__('Data gaji sudah di-cancel.'));
        } else {
            $this->Flash->error(__('Gagal cancel data gaji. Silahkan coba lagi.'));
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
                ->contain(['JobPositions', 'Educations', 'MaritalStatuses', 'Transports', 
                           'Allowances', 'Bpjs', "Deductions"])
                ->where([
                    'Users.id' => $user_id,
                ])->last();

            $this->set('basic_salary',  @$user->basic_salary ?: 0);
            $this->set('position_allowance', @$user->job_position->position_allowance ?: 0);
            $this->set('communication_allowance', @$user->job_position->communication_allowance ?: 0);
            $this->set('education_allowance', @$user->education->education_allowance ?: 0);
            $this->set('transport_allowance', @$user->transport->transport_allowance ?: 0);

            # Get Rice Allowances
            if (date_diff(Date::now(), new Date(@$user->tmt))->y >= @$user->marital_status->after_years) {
                $this->set('rice_allowance', @$user->marital_status->rice_allowance ?: 0);
            } else {
                $this->set('rice_allowance', 0);
            }

            # Get BPJS Allowances
            $this->set('bpjs_allowances', $user['bpjs']);

            # Get Other Allowance
            $this->set('other_allowances', $user['allowances']);

            # Get Deductions
            $this->set('deductions', $user['deductions']);

            $this->render('ajax_response', 'ajax');
        }
    }

}
