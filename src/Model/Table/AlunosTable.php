<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alunos Model
 *
 * @method \App\Model\Entity\Aluno get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aluno newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Aluno[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aluno|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aluno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aluno[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aluno findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AlunosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('alunos');
        $this->displayField('idAluno');
        $this->primaryKey('idAluno');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('idAluno')
            ->allowEmpty('idAluno', 'create');

        $validator
            ->allowEmpty('aluno_nome');

        $validator
            ->allowEmpty('aluno_Matricula');

        $validator
            ->allowEmpty('aluno_Cpf');

        $validator
            ->allowEmpty('aluno_RG');

        $validator
            ->allowEmpty('aluno_Endereco');

        $validator
            ->allowEmpty('aluno_Telefone');

        $validator
            ->allowEmpty('aluno_Email');

        $validator
            ->integer('aursos_idCurso')
            ->requirePresence('aursos_idCurso', 'create')
            ->notEmpty('aursos_idCurso');

        return $validator;
    }
}
