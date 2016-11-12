<?php
use Migrations\AbstractMigration;

class RemoveNameFromPayrolls extends AbstractMigration
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
        $table->removeColumn('other_allowance_1');
        $table->removeColumn('other_allowance_2');
        $table->removeColumn('other_allowance_3');
        $table->removeColumn('other_allowance_4');
        $table->removeColumn('other_allowance_5');
        $table->update();
    }
}
