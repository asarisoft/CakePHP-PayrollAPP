<?php
use Migrations\AbstractMigration;

class CreateEducations extends AbstractMigration
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
        $table = $this->table('educations');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('education_allowance', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
