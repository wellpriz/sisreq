<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TiposRequerimento Model
 *
 * @method \App\Model\Entity\TiposRequerimento get($primaryKey, $options = [])
 * @method \App\Model\Entity\TiposRequerimento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TiposRequerimento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TiposRequerimento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TiposRequerimento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TiposRequerimento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TiposRequerimento findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TiposRequerimentoTable extends Table
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

        $this->table('tipos_requerimento');
        $this->displayField('idTipo_Requerimento');
        $this->primaryKey('idTipo_Requerimento');

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
            ->integer('idTipo_Requerimento')
            ->allowEmpty('idTipo_Requerimento', 'create');

        $validator
            ->allowEmpty('tipo_Requerimento_Texto');

        $validator
            ->allowEmpty('Tipo_Requerimento_duracao');

        return $validator;
    }
}
