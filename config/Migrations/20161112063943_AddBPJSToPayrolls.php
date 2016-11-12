<?php
use Migrations\AbstractMigration;

class AddBPJSToPayrolls extends AbstractMigration
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
        $table->addColumn('bpjs_kesehatan', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('bpjs_ketenagakerjaan', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->update();
    }
}
