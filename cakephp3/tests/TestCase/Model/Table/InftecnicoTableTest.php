<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InftecnicoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InftecnicoTable Test Case
 */
class InftecnicoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InftecnicoTable
     */
    public $Inftecnico;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.inftecnico'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Inftecnico') ? [] : ['className' => 'App\Model\Table\InftecnicoTable'];
        $this->Inftecnico = TableRegistry::get('Inftecnico', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Inftecnico);

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
