<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Histlicencias Model
 *
 * @method \App\Model\Entity\Histlicencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Histlicencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Histlicencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Histlicencia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Histlicencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Histlicencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Histlicencia findOrCreate($search, callable $callback = null, $options = [])
 */
class HistlicenciasTable extends Table
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

        $this->table('histlicencias');
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
            ->date('fecha_solicitud')
            ->requirePresence('fecha_solicitud', 'create')
            ->notEmpty('fecha_solicitud');

        $validator
            ->date('fecha_exp')
            ->allowEmpty('fecha_exp');

        return $validator;
    }
}
