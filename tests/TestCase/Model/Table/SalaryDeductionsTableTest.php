<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalaryDeductionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalaryDeductionsTable Test Case
 */
class SalaryDeductionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SalaryDeductionsTable
     */
    public $SalaryDeductions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.salary_deductions',
        'app.payrolls',
        'app.users',
        'app.transports',
        'app.job_positions',
        'app.marital_statuses',
        'app.educations',
        'app.allowances',
        'app.deductions',
        'app.bpjs',
        'app.users_bpjs',
        'app.salaryallowances'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SalaryDeductions') ? [] : ['className' => 'App\Model\Table\SalaryDeductionsTable'];
        $this->SalaryDeductions = TableRegistry::get('SalaryDeductions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SalaryDeductions);

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
