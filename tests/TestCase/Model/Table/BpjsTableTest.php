<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BpjsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BpjsTable Test Case
 */
class BpjsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BpjsTable
     */
    public $Bpjs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bpjs',
        'app.users',
        'app.transports',
        'app.job_positions',
        'app.marital_statuses',
        'app.educations',
        'app.allowances',
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
        $config = TableRegistry::exists('Bpjs') ? [] : ['className' => 'App\Model\Table\BpjsTable'];
        $this->Bpjs = TableRegistry::get('Bpjs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bpjs);

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
}
