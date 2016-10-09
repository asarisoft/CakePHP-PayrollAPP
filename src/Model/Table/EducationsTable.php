<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class EducationsTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('educations');
        $this->displayField('name');
        $this->primaryKey('id');
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
            ->numeric('education_allowance')
            ->requirePresence('education_allowance', 'create')
            ->notEmpty('education_allowance');

        return $validator;
    }
}
