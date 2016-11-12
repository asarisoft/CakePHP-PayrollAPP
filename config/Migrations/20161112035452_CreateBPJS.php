<?php
use Migrations\AbstractMigration;

class CreateBpjs extends AbstractMigration
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
        $table = $this->table('Bpjs');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('class', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('value', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
