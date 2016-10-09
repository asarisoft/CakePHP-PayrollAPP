<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PayrollsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PayrollsTable Test Case
 */
class PayrollsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PayrollsTable
     */
    public $Payrolls;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.payrolls',
        'app.users',
        'app.transports',
        'app.job_positions',
        'app.marital_statuses',
        'app.educations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Payrolls') ? [] : ['className' => 'App\Model\Table\PayrollsTable'];
        $this->Payrolls = TableRegistry::get('Payrolls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Payrolls);

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
