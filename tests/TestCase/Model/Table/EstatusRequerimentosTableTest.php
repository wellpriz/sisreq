<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstatusRequerimentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstatusRequerimentosTable Test Case
 */
class EstatusRequerimentosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstatusRequerimentosTable
     */
    public $EstatusRequerimentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.estatus_requerimentos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EstatusRequerimentos') ? [] : ['className' => 'App\Model\Table\EstatusRequerimentosTable'];
        $this->EstatusRequerimentos = TableRegistry::get('EstatusRequerimentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EstatusRequerimentos);

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
