<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RespostaRequerimentos Model
 *
 * @method \App\Model\Entity\RespostaRequerimento get($primaryKey, $options = [])
 * @method \App\Model\Entity\RespostaRequerimento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RespostaRequerimento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RespostaRequerimento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RespostaRequerimento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RespostaRequerimento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RespostaRequerimento findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RespostaRequerimentosTable extends Table
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

        $this->table('resposta_requerimentos');
        $this->displayField('idResposta_Requerimento');
        $this->primaryKey('idResposta_Requerimento');

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
            ->integer('idResposta_Requerimento')
            ->allowEmpty('idResposta_Requerimento', 'create');

        $validator
            ->allowEmpty('resposta_Requerimento_Texto');

        $validator
            ->integer('requerimentos_idRequerimento')
            ->requirePresence('requerimentos_idRequerimento', 'create')
            ->notEmpty('requerimentos_idRequerimento');

        $validator
            ->integer('funcionarios_idFuncionario')
            ->requirePresence('funcionarios_idFuncionario', 'create')
            ->notEmpty('funcionarios_idFuncionario');

        return $validator;
    }
}
