<?php
use Migrations\AbstractMigration;

class RemoveBPJSFromPayrolls extends AbstractMigration
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
        $table->removeColumn('bpjs_kesehatan');
        $table->removeColumn('bpjs_ketenagakerjaan');
        $table->update();
    }
}
