<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CabinformesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CabinformesTable Test Case
 */
class CabinformesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CabinformesTable
     */
    public $Cabinformes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cabinformes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cabinformes') ? [] : ['className' => 'App\Model\Table\CabinformesTable'];
        $this->Cabinformes = TableRegistry::get('Cabinformes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cabinformes);

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
