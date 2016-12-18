<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\deductionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\deductionsTable Test Case
 */
class deductionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\deductionsTable
     */
    public $deductions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.deductions',
        'app.users',
        'app.transports',
        'app.job_positions',
        'app.marital_statuses',
        'app.educations',
        'app.allowances',
        'app.bpjs',
        'app.users_bpjs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('deductions') ? [] : ['className' => 'App\Model\Table\deductionsTable'];
        $this->deductions = TableRegistry::get('deductions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->deductions);

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
