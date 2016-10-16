<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Transports
 * @property \Cake\ORM\Association\BelongsTo $JobPositions
 * @property \Cake\ORM\Association\BelongsTo $MaritalStatuses
 * @property \Cake\ORM\Association\BelongsTo $Educations
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null)
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Transports', [
            'foreignKey' => 'transports_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('JobPositions', [
            'foreignKey' => 'job_positions_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('MaritalStatuses', [
            'foreignKey' => 'marital_statuses_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Educations', [
            'foreignKey' => 'educations_id',
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
            ->date('tmt')
            ->requirePresence('tmt', 'create')
            ->notEmpty('tmt');

        $validator
            ->numeric('basic_salary')
            ->requirePresence('basic_salary', 'create')
            ->notEmpty('basic_salary');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['transports_id'], 'Transports'));
        $rules->add($rules->existsIn(['job_positions_id'], 'JobPositions'));
        $rules->add($rules->existsIn(['marital_statuses_id'], 'MaritalStatuses'));
        $rules->add($rules->existsIn(['educations_id'], 'Educations'));

        return $rules;
    }
}
