<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersBpjsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersBpjsTable Test Case
 */
class UsersBpjsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersBpjsTable
     */
    public $UsersBpjs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users_bpjs',
        'app.users',
        'app.transports',
        'app.job_positions',
        'app.marital_statuses',
        'app.educations',
        'app.allowances',
        'app.bpjs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UsersBpjs') ? [] : ['className' => 'App\Model\Table\UsersBpjsTable'];
        $this->UsersBpjs = TableRegistry::get('UsersBpjs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersBpjs);

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
