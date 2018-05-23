<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Requerimento Entity
 *
 * @property int $idRequerimento
 * @property string $Requerimento_Nome
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $setor_idSetor
 * @property int $alunos_idAluno
 * @property int $estatus_requerimentos_idEstatus_Requerimento
 * @property int $tipos_requerimento_idTipo_Requerimento
 */
class Requerimento extends Entity
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
        'idRequerimento' => false
    ];
}
