<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tipolicencias Model
 *
 * @property \Cake\ORM\Association\HasMany $Regsolicitantes
 *
 * @method \App\Model\Entity\Tipolicencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tipolicencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tipolicencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tipolicencia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipolicencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tipolicencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tipolicencia findOrCreate($search, callable $callback = null, $options = [])
 */
class TipolicenciasTable extends Table
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

        $this->table('tipolicencias');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Regsolicitantes', [
            'foreignKey' => 'tipolicencia_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('tipolicencia', 'create')
            ->notEmpty('tipolicencia');

        $validator
            ->requirePresence('doc_necesaria', 'create')
            ->notEmpty('doc_necesaria');

        $validator
            ->numeric('tasas')
            ->requirePresence('tasas', 'create')
            ->notEmpty('tasas');

        return $validator;
    }
}
