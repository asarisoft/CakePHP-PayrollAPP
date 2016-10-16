<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalaryAllowancesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalaryAllowancesTable Test Case
 */
class SalaryAllowancesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SalaryAllowancesTable
     */
    public $SalaryAllowances;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.salary_allowances',
        'app.payrolls',
        'app.users',
        'app.transports',
        'app.job_positions',
        'app.marital_statuses',
        'app.educations',
        'app.allowances'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SalaryAllowances') ? [] : ['className' => 'App\Model\Table\SalaryAllowancesTable'];
        $this->SalaryAllowances = TableRegistry::get('SalaryAllowances', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SalaryAllowances);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
