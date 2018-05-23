<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TiposRequerimentoFixture
 *
 */
class TiposRequerimentoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tipos_requerimento';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idTipo_Requerimento' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'tipo_Requerimento_Texto' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Tipo_Requerimento_duracao' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idTipo_Requerimento'], 'length' => []],
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
            'idTipo_Requerimento' => 1,
            'tipo_Requerimento_Texto' => 'Lorem ipsum dolor sit amet',
            'Tipo_Requerimento_duracao' => 'Lorem ipsum dolor sit amet',
            'created' => '2018-05-22 23:14:14',
            'modified' => '2018-05-22 23:14:14'
        ],
    ];
}
