<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cabinformes Model
 *
 * @method \App\Model\Entity\Cabinforme get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cabinforme newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cabinforme[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cabinforme|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cabinforme patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cabinforme[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cabinforme findOrCreate($search, callable $callback = null, $options = [])
 */
class CabinformesTable extends Table
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

        $this->table('cabinformes');
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
            ->integer('estexpediente_numexp')
            ->requirePresence('estexpediente_numexp', 'create')
            ->notEmpty('estexpediente_numexp');

        $validator
            ->dateTime('fecha_envio')
            ->requirePresence('fecha_envio', 'create')
            ->notEmpty('fecha_envio');

        $validator
            ->dateTime('fecha_recepcion')
            ->requirePresence('fecha_recepcion', 'create')
            ->notEmpty('fecha_recepcion');

        $validator
            ->requirePresence('valoracion_inf', 'create')
            ->notEmpty('valoracion_inf');

        $validator
            ->allowEmpty('comentarios');

        return $validator;
    }
}
