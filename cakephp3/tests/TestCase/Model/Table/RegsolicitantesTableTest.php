<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegsolicitantesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegsolicitantesTable Test Case
 */
class RegsolicitantesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RegsolicitantesTable
     */
    public $Regsolicitantes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.regsolicitantes',
        'app.tipolicencias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Regsolicitantes') ? [] : ['className' => 'App\Model\Table\RegsolicitantesTable'];
        $this->Regsolicitantes = TableRegistry::get('Regsolicitantes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Regsolicitantes);

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
