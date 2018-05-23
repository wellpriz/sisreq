<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EstatusRequerimentos Model
 *
 * @method \App\Model\Entity\EstatusRequerimento get($primaryKey, $options = [])
 * @method \App\Model\Entity\EstatusRequerimento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EstatusRequerimento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EstatusRequerimento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EstatusRequerimento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EstatusRequerimento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EstatusRequerimento findOrCreate($search, callable $callback = null)
 */
class EstatusRequerimentosTable extends Table
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

        $this->table('estatus_requerimentos');
        $this->displayField('idEstatus_Requerimento');
        $this->primaryKey('idEstatus_Requerimento');
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
            ->integer('idEstatus_Requerimento')
            ->allowEmpty('idEstatus_Requerimento', 'create');

        $validator
            ->allowEmpty('Estatus_Requerimento_Nome');

        return $validator;
    }
}
