<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class SalaryAllowancesTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('salary_allowances');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Payrolls', [
            'foreignKey' => 'payrolls_id',
            'joinType' => 'INNER'
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
            ->numeric('value')
            ->requirePresence('value', 'create')
            ->notEmpty('value');

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['payrolls_id'], 'Payrolls'));

        return $rules;
    }
}
