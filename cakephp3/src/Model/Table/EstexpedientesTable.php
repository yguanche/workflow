<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estexpedientes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Estexpediente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estexpediente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Estexpediente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estexpediente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estexpediente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estexpediente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estexpediente findOrCreate($search, callable $callback = null, $options = [])
 */
class EstexpedientesTable extends Table
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

        $this->table('estexpedientes');
        $this->displayField('numexp');
        $this->primaryKey('numexp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
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
            ->integer('numexp')
            ->allowEmpty('numexp', 'create');

        $validator
            ->requirePresence('est_actual', 'create')
            ->notEmpty('est_actual');

        $validator
            ->dateTime('fecha_recepción')
            ->allowEmpty('fecha_recepción');

        $validator
            ->requirePresence('user_actual', 'create')
            ->notEmpty('user_actual');

        $validator
            ->requirePresence('dept_actual', 'create')
            ->notEmpty('dept_actual');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
