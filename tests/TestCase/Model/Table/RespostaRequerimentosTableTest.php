<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RespostaRequerimentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RespostaRequerimentosTable Test Case
 */
class RespostaRequerimentosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RespostaRequerimentosTable
     */
    public $RespostaRequerimentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.resposta_requerimentos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RespostaRequerimentos') ? [] : ['className' => 'App\Model\Table\RespostaRequerimentosTable'];
        $this->RespostaRequerimentos = TableRegistry::get('RespostaRequerimentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RespostaRequerimentos);

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
