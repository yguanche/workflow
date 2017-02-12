<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Inftecnico Model
 *
 * @method \App\Model\Entity\Inftecnico get($primaryKey, $options = [])
 * @method \App\Model\Entity\Inftecnico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Inftecnico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Inftecnico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Inftecnico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Inftecnico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Inftecnico findOrCreate($search, callable $callback = null, $options = [])
 */
class InftecnicoTable extends Table
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

        $this->table('inftecnico');
        $this->displayField('numexp');
        $this->primaryKey('numexp');
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
            ->requirePresence('licencia_numreg', 'create')
            ->notEmpty('licencia_numreg');

        $validator
            ->integer('licencia_numexp')
            ->requirePresence('licencia_numexp', 'create')
            ->notEmpty('licencia_numexp');

        $validator
            ->requirePresence('aprobado_junta', 'create')
            ->notEmpty('aprobado_junta');

        $validator
            ->requirePresence('aprobado_secretaria', 'create')
            ->notEmpty('aprobado_secretaria');

        $validator
            ->requirePresence('user_act_gestiona', 'create')
            ->notEmpty('user_act_gestiona');

        $validator
            ->date('fecha_in')
            ->requirePresence('fecha_in', 'create')
            ->notEmpty('fecha_in');

        $validator
            ->date('fecha_out')
            ->requirePresence('fecha_out', 'create')
            ->notEmpty('fecha_out');

        return $validator;
    }
}
