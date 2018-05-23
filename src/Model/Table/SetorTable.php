<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Setor Model
 *
 * @method \App\Model\Entity\Setor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Setor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Setor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Setor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Setor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Setor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Setor findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SetorTable extends Table
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

        $this->table('setor');
        $this->displayField('idSetor');
        $this->primaryKey('idSetor');

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
            ->integer('idSetor')
            ->allowEmpty('idSetor', 'create');

        $validator
            ->allowEmpty('Setor_nome');

        return $validator;
    }
}
