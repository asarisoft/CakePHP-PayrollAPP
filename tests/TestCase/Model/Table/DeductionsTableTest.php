<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeductionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeductionsTable Test Case
 */
class DeductionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DeductionsTable
     */
    public $Deductions;

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
        $config = TableRegistry::exists('Deductions') ? [] : ['className' => 'App\Model\Table\DeductionsTable'];
        $this->Deductions = TableRegistry::get('Deductions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Deductions);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
