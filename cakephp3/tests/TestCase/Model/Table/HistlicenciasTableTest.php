<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HistlicenciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HistlicenciasTable Test Case
 */
class HistlicenciasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HistlicenciasTable
     */
    public $Histlicencias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.histlicencias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Histlicencias') ? [] : ['className' => 'App\Model\Table\HistlicenciasTable'];
        $this->Histlicencias = TableRegistry::get('Histlicencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Histlicencias);

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
