<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AllowancesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AllowancesTable Test Case
 */
class AllowancesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AllowancesTable
     */
    public $Allowances;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.allowances',
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
        $config = TableRegistry::exists('Allowances') ? [] : ['className' => 'App\Model\Table\AllowancesTable'];
        $this->Allowances = TableRegistry::get('Allowances', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Allowances);

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
