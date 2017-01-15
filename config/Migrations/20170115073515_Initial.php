<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('allowances')
            ->addColumn('users_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('value', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('bpjs')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('class', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('value', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('deductions')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('users_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('value', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('educations')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('education_allowance', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('jobpositions')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('position_allowance', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('communication_allowance', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('marital_statuses')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('rice_allowance', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('after_years', 'integer', [
                'default' => null,
                'limit' => 2,
                'null' => false,
            ])
            ->create();

        $this->table('payrolls')
            ->addColumn('users_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('month', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('year', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('basic_salary', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('position_allowance', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('communication_allowance', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('rice_allowance', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('education_allowance', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('transport_allowance', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('collector_share_profit', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('status', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->create();

        $this->table('salary_allowances')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('value', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('payrolls_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->create();

        $this->table('salary_deductions')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('payrolls_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('value', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('transports')
            ->addColumn('origin', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('destination', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('transport_allowance', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('users')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('tmt', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('transports_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('job_positions_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('marital_statuses_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('educations_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('basic_salary', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('username', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('is_admin', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('is_active', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('tunjangan_kompetensi', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('privileges', 'integer', [
                'default' => null,
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('no_rekening', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->create();

        $this->table('users_bpjs')
            ->addColumn('users_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('bpjs_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->create();
    }

    public function down()
    {
        $this->dropTable('allowances');
        $this->dropTable('bpjs');
        $this->dropTable('deductions');
        $this->dropTable('educations');
        $this->dropTable('jobpositions');
        $this->dropTable('marital_statuses');
        $this->dropTable('payrolls');
        $this->dropTable('salary_allowances');
        $this->dropTable('salary_deductions');
        $this->dropTable('transports');
        $this->dropTable('users');
        $this->dropTable('users_bpjs');
    }
}
