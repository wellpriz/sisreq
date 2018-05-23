<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SetorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SetorTable Test Case
 */
class SetorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SetorTable
     */
    public $Setor;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.setor'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Setor') ? [] : ['className' => 'App\Model\Table\SetorTable'];
        $this->Setor = TableRegistry::get('Setor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Setor);

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
