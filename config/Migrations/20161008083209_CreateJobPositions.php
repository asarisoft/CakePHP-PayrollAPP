<?php
use Migrations\AbstractMigration;

class CreateJobPositions extends AbstractMigration
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
        $table = $this->table('jobpositions');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
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
        $table->create();
    }
}
