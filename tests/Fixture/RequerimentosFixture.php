<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RequerimentosFixture
 *
 */
class RequerimentosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idRequerimento' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Requerimento_Nome' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'setor_idSetor' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'alunos_idAluno' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estatus_requerimentos_idEstatus_Requerimento' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipos_requerimento_idTipo_Requerimento' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_requerimentos_setor1_idx' => ['type' => 'index', 'columns' => ['setor_idSetor'], 'length' => []],
            'fk_requerimentos_alunos1_idx' => ['type' => 'index', 'columns' => ['alunos_idAluno'], 'length' => []],
            'fk_requerimentos_estatus_requerimentos1_idx' => ['type' => 'index', 'columns' => ['estatus_requerimentos_idEstatus_Requerimento'], 'length' => []],
            'fk_requerimentos_tipos_requerimento1_idx' => ['type' => 'index', 'columns' => ['tipos_requerimento_idTipo_Requerimento'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idRequerimento'], 'length' => []],
            'fk_requerimentos_setor1' => ['type' => 'foreign', 'columns' => ['setor_idSetor'], 'references' => ['setor', 'idSetor'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_requerimentos_alunos1' => ['type' => 'foreign', 'columns' => ['alunos_idAluno'], 'references' => ['alunos', 'idAluno'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_requerimentos_estatus_requerimentos1' => ['type' => 'foreign', 'columns' => ['estatus_requerimentos_idEstatus_Requerimento'], 'references' => ['estatus_requerimentos', 'idEstatus_Requerimento'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_requerimentos_tipos_requerimento1' => ['type' => 'foreign', 'columns' => ['tipos_requerimento_idTipo_Requerimento'], 'references' => ['tipos_requerimento', 'idTipo_Requerimento'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
            'idRequerimento' => 1,
            'Requerimento_Nome' => 'Lorem ipsum dolor sit amet',
            'created' => '2018-05-22 23:07:33',
            'modified' => '2018-05-22 23:07:33',
            'setor_idSetor' => 1,
            'alunos_idAluno' => 1,
            'estatus_requerimentos_idEstatus_Requerimento' => 1,
            'tipos_requerimento_idTipo_Requerimento' => 1
        ],
    ];
}
