<?php
use Migrations\AbstractMigration;

class AddFieldToUsers extends AbstractMigration
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
        $table = $this->table('users');
        $table->addColumn('tunjangan_kompetensi', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('privileges', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => false,
        ]);
        $table->update();
    }
}
