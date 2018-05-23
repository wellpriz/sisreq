<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aluno Entity
 *
 * @property int $idAluno
 * @property string $aluno_nome
 * @property string $aluno_Matricula
 * @property string $aluno_Cpf
 * @property string $aluno_RG
 * @property string $aluno_Endereco
 * @property string $aluno_Telefone
 * @property string $aluno_Email
 * @property int $aursos_idCurso
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Aluno extends Entity
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
        'idAluno' => false
    ];
}
