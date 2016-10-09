<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaritalstatusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaritalstatusesTable Test Case
 */
class MaritalstatusesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MaritalstatusesTable
     */
    public $Maritalstatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.maritalstatuses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Maritalstatuses') ? [] : ['className' => 'App\Model\Table\MaritalstatusesTable'];
        $this->Maritalstatuses = TableRegistry::get('Maritalstatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Maritalstatuses);

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
