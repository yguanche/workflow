<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstexpedientesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstexpedientesTable Test Case
 */
class EstexpedientesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstexpedientesTable
     */
    public $Estexpedientes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.estexpedientes',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Estexpedientes') ? [] : ['className' => 'App\Model\Table\EstexpedientesTable'];
        $this->Estexpedientes = TableRegistry::get('Estexpedientes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Estexpedientes);

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
