<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LicenciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LicenciasTable Test Case
 */
class LicenciasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LicenciasTable
     */
    public $Licencias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.licencias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Licencias') ? [] : ['className' => 'App\Model\Table\LicenciasTable'];
        $this->Licencias = TableRegistry::get('Licencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Licencias);

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
