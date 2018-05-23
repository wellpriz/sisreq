<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RespostaRequerimentosFixture
 *
 */
class RespostaRequerimentosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idResposta_Requerimento' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'resposta_Requerimento_Texto' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'requerimentos_idRequerimento' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'funcionarios_idFuncionario' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_resposta_Requerimento_requerimentos1_idx' => ['type' => 'index', 'columns' => ['requerimentos_idRequerimento'], 'length' => []],
            'fk_resposta_Requerimento_funcionarios1_idx' => ['type' => 'index', 'columns' => ['funcionarios_idFuncionario'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idResposta_Requerimento'], 'length' => []],
            'fk_resposta_Requerimento_requerimentos1' => ['type' => 'foreign', 'columns' => ['requerimentos_idRequerimento'], 'references' => ['requerimentos', 'idRequerimento'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_resposta_Requerimento_funcionarios1' => ['type' => 'foreign', 'columns' => ['funcionarios_idFuncionario'], 'references' => ['funcionarios', 'idFuncionario'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'idResposta_Requerimento' => 1,
            'resposta_Requerimento_Texto' => 'Lorem ipsum dolor sit amet',
            'created' => '2018-05-22 23:13:46',
            'modified' => '2018-05-22 23:13:46',
            'requerimentos_idRequerimento' => 1,
            'funcionarios_idFuncionario' => 1
        ],
    ];
}
