<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Regsolicitantes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Tipolicencias
 *
 * @method \App\Model\Entity\Regsolicitante get($primaryKey, $options = [])
 * @method \App\Model\Entity\Regsolicitante newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Regsolicitante[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Regsolicitante|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Regsolicitante patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Regsolicitante[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Regsolicitante findOrCreate($search, callable $callback = null, $options = [])
 */
class RegsolicitantesTable extends Table
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

        $this->table('regsolicitantes');
        $this->displayField('numreg');
        $this->primaryKey('numreg');

        $this->belongsTo('Tipolicencias', [
            'foreignKey' => 'tipolicencia_id',
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
            ->integer('numreg')
            ->allowEmpty('numreg', 'create');

        $validator
            ->requirePresence('dni', 'create')
            ->notEmpty('dni');

        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');

        $validator
            ->integer('tipo_licencia')
            ->requirePresence('tipo_licencia', 'create')
            ->notEmpty('tipo_licencia');

        $validator
            ->requirePresence('doc_presentada', 'create')
            ->notEmpty('doc_presentada');

        $validator
            ->date('fecha_in')
            ->requirePresence('fecha_in', 'create')
            ->notEmpty('fecha_in');

        $validator
            ->date('fecha_out')
            ->requirePresence('fecha_out', 'create')
            ->notEmpty('fecha_out');

        $validator
            ->allowEmpty('usuario_actual_gest');

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
        $rules->add($rules->existsIn(['tipolicencia_id'], 'Tipolicencias'));

        return $rules;
    }
}
