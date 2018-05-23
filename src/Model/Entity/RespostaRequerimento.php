<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RespostaRequerimento Entity
 *
 * @property int $idResposta_Requerimento
 * @property string $resposta_Requerimento_Texto
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $requerimentos_idRequerimento
 * @property int $funcionarios_idFuncionario
 */
class RespostaRequerimento extends Entity
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
        'idResposta_Requerimento' => false
    ];
}
