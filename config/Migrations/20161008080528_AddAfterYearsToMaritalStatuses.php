<?php
use Migrations\AbstractMigration;

class AddAfterYearsToMaritalStatuses extends AbstractMigration
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
        $table = $this->table('marital_statuses');
        $table->addColumn('after_years', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => false,
        ]);
        $table->update();
    }
}
