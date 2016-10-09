<?php
use Migrations\AbstractMigration;

class CreatePayroll extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('payrolls');
        $table->addColumn('users_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('month', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('year', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('basic_salary', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('position_allowance', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('communication_allowance', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('rice_allowance', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('education_allowance', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('transport_allowance', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('collector_share_profit', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('other_allowance_1', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('other_allowance_2', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('other_allowance_3', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('other_allowance_4', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('other_allowance_5', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
