<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Municipalites Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Groups
 *
 * @method \App\Model\Entity\Municipalite get($primaryKey, $options = [])
 * @method \App\Model\Entity\Municipalite newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Municipalite[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Municipalite|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Municipalite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Municipalite[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Municipalite findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MunicipalitesTable extends Table
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

        $this->table('municipalites');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Groups', [
            'foreignKey' => 'groups_id',
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
            ->requirePresence('description1', 'create')
            ->notEmpty('description1');

        $validator
            ->requirePresence('description2', 'create')
            ->notEmpty('description2');

        $validator
            ->requirePresence('slogan1', 'create')
            ->notEmpty('slogan1');

        $validator
            ->requirePresence('slogan2', 'create')
            ->notEmpty('slogan2');

        $validator
            ->integer('puntuation1')
            ->requirePresence('puntuation1', 'create')
            ->notEmpty('puntuation1');

        $validator
            ->integer('puntuation2')
            ->requirePresence('puntuation2', 'create')
            ->notEmpty('puntuation2');

        $validator
            ->integer('puntuation3')
            ->requirePresence('puntuation3', 'create')
            ->notEmpty('puntuation3');

        $validator
            ->requirePresence('name_puntuation1', 'create')
            ->notEmpty('name_puntuation1');

        $validator
            ->requirePresence('name_puntuation2', 'create')
            ->notEmpty('name_puntuation2');

        $validator
            ->requirePresence('name_puntuation3', 'create')
            ->notEmpty('name_puntuation3');

        $validator
            ->requirePresence('photo', 'create')
            ->notEmpty('photo');

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
        $rules->add($rules->existsIn(['groups_id'], 'Groups'));

        return $rules;
    }
}
