<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher; 

class UsersTable extends Table
{
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
        $this->hasMany('Allowances', [
            'foreignKey' => 'users_id',
            'dependent' => true,
        ]);
        $this->hasMany('Deductions', [
            'foreignKey' => 'users_id',
            'dependent' => true,
        ]);
        $this->belongsToMany('Bpjs', [
            'foreignKey' => 'users_id',
            'targetForeignKey' => 'bpjs_id',
            'joinTable' => 'users_bpjs'
        ]);
    }

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
            ->numeric('no_rekening')
            ->requirePresence('no_rekening', 'create')
            ->notEmpty('no_rekening');

        $validator
            ->numeric('basic_salary')
            ->requirePresence('basic_salary', 'create')
            ->notEmpty('basic_salary');

        return $validator;
    }


    public function validationPassword(Validator $validator) {
        $validator ->add('old_password','custom',['rule'=> function($value, $context){ $user = $this->get($context['data']['id']); if ($user) { if ((new DefaultPasswordHasher)->check($value, $user->password)) { return true; } } return false; }, 'message'=>'Password lama salah!', ]) ->notEmpty('old_password'); 
        $validator 
            ->add('password',[ 'match'=>[ 'rule'=> ['compareWith','password1'], 'message'=>'Password tidak sama!!', ] ]) ->notEmpty('password'); 
        return $validator; 
    } 

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
