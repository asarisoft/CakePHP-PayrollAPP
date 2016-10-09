<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JobpositionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JobpositionsTable Test Case
 */
class JobpositionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JobpositionsTable
     */
    public $Jobpositions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.jobpositions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Jobpositions') ? [] : ['className' => 'App\Model\Table\JobpositionsTable'];
        $this->Jobpositions = TableRegistry::get('Jobpositions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jobpositions);

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
