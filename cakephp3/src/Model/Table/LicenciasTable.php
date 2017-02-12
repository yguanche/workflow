<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Licencias Model
 *
 * @method \App\Model\Entity\Licencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Licencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Licencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Licencia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Licencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Licencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Licencia findOrCreate($search, callable $callback = null, $options = [])
 */
class LicenciasTable extends Table
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

        $this->table('licencias');
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
            ->requirePresence('numreg', 'create')
            ->notEmpty('numreg');

        $validator
            ->integer('numexp')
            ->allowEmpty('numexp', 'create');

        $validator
            ->integer('estexpediente_numexp')
            ->requirePresence('estexpediente_numexp', 'create')
            ->notEmpty('estexpediente_numexp');

        $validator
            ->integer('histlicencia_numexp')
            ->requirePresence('histlicencia_numexp', 'create')
            ->notEmpty('histlicencia_numexp');

        $validator
            ->integer('regsolicitante_numreg')
            ->requirePresence('regsolicitante_numreg', 'create')
            ->notEmpty('regsolicitante_numreg');

        $validator
            ->requirePresence('apl_comerc_lic', 'create')
            ->notEmpty('apl_comerc_lic');

        $validator
            ->requirePresence('ubicacion', 'create')
            ->notEmpty('ubicacion');

        $validator
            ->requirePresence('datos_fisicos_local', 'create')
            ->notEmpty('datos_fisicos_local');

        $validator
            ->requirePresence('user_gestiona', 'create')
            ->notEmpty('user_gestiona');

        $validator
            ->date('fecha_in')
            ->requirePresence('fecha_in', 'create')
            ->notEmpty('fecha_in');

        $validator
            ->date('fecha_out')
            ->allowEmpty('fecha_out');

        return $validator;
    }
}
