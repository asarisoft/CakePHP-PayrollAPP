<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Allowances Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Allowance get($primaryKey, $options = [])
 * @method \App\Model\Entity\Allowance newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Allowance[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Allowance|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Allowance patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Allowance[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Allowance findOrCreate($search, callable $callback = null)
 */
class AllowancesTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('allowances');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'users_id',
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
        $rules->add($rules->existsIn(['users_id'], 'Users'));

        return $rules;
    }
}
