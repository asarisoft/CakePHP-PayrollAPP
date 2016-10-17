<?php
use Migrations\AbstractMigration;

class AddIsAdminToUsers extends AbstractMigration
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
        $table->addColumn('is_admin', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('is_active', 'boolean', [
            'default' => 1,
            'null' => false,
        ]);
        $table->update();
    }
}
