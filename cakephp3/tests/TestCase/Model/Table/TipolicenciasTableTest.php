<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipolicenciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipolicenciasTable Test Case
 */
class TipolicenciasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipolicenciasTable
     */
    public $Tipolicencias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipolicencias',
        'app.regsolicitantes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tipolicencias') ? [] : ['className' => 'App\Model\Table\TipolicenciasTable'];
        $this->Tipolicencias = TableRegistry::get('Tipolicencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tipolicencias);

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
