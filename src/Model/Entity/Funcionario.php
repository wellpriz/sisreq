<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Funcionario Entity
 *
 * @property int $idFuncionario
 * @property string $Funcionario_Nome
 * @property string $Funcionario_Cargo
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $setor_idSetor
 */
class Funcionario extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'idFuncionario' => false
    ];
}
