<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposRequerimentoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposRequerimentoTable Test Case
 */
class TiposRequerimentoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposRequerimentoTable
     */
    public $TiposRequerimento;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipos_requerimento'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TiposRequerimento') ? [] : ['className' => 'App\Model\Table\TiposRequerimentoTable'];
        $this->TiposRequerimento = TableRegistry::get('TiposRequerimento', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TiposRequerimento);

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
