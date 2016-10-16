<?php
use Migrations\AbstractMigration;

class CreateSalaryAllowances extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('salary_awlloances');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('value', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('payrolls_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->create();
    }
}
