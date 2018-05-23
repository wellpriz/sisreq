<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlunosFixture
 *
 */
class AlunosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idAluno' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'aluno_nome' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'aluno_Matricula' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'aluno_Cpf' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'aluno_RG' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'aluno_Endereco' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'aluno_Telefone' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'aluno_Email' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'aursos_idCurso' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_Aluno_Curso1_idx' => ['type' => 'index', 'columns' => ['aursos_idCurso'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idAluno'], 'length' => []],
            'fk_Aluno_Curso1' => ['type' => 'foreign', 'columns' => ['aursos_idCurso'], 'references' => ['cursos', 'idCurso'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'idAluno' => 1,
            'aluno_nome' => 'Lorem ipsum dolor sit amet',
            'aluno_Matricula' => 'Lorem ipsum dolor sit amet',
            'aluno_Cpf' => 'Lorem ipsum dolor sit amet',
            'aluno_RG' => 'Lorem ipsum dolor sit amet',
            'aluno_Endereco' => 'Lorem ipsum dolor sit amet',
            'aluno_Telefone' => 'Lorem ipsum dolor sit amet',
            'aluno_Email' => 'Lorem ipsum dolor sit amet',
            'aursos_idCurso' => 1,
            'created' => '2018-05-22 23:05:57',
            'modified' => '2018-05-22 23:05:57'
        ],
    ];
}
