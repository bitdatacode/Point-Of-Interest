<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pointofinterestes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Municipalites
 *
 * @method \App\Model\Entity\Pointofintereste get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pointofintereste newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pointofintereste[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pointofintereste|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pointofintereste patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pointofintereste[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pointofintereste findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PointofinterestesTable extends Table
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

        $this->table('pointofinterestes');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'users_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Municipalites', [
            'foreignKey' => 'municipalites_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('slogan1', 'create')
            ->notEmpty('slogan1');

        $validator
            ->requirePresence('description1', 'create')
            ->notEmpty('description1');

        $validator
            ->requirePresence('description2', 'create')
            ->notEmpty('description2');

        $validator
            ->requirePresence('titele1', 'create')
            ->notEmpty('titele1');

        $validator
            ->requirePresence('titele2', 'create')
            ->notEmpty('titele2');

        $validator
            ->numeric('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->requirePresence('horario', 'create')
            ->notEmpty('horario');

        $validator
            ->requirePresence('photo', 'create')
            ->notEmpty('photo');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

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
        $rules->add($rules->existsIn(['users_id'], 'Users'));
        $rules->add($rules->existsIn(['municipalites_id'], 'Municipalites'));

        return $rules;
    }
}
