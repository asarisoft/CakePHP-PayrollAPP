<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bpjs Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Bpj get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bpj newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bpj[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bpj|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bpj patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bpj[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bpj findOrCreate($search, callable $callback = null)
 */
class BpjsTable extends Table
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

        $this->table('bpjs');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsToMany('Users', [
            'foreignKey' => 'bpjs_id',
            'targetForeignKey' => 'users_id',
            'joinTable' => 'users_bpjs'
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
            ->numeric('class')
            ->requirePresence('class', 'create')
            ->notEmpty('class');

        $validator
            ->numeric('value')
            ->requirePresence('value', 'create')
            ->notEmpty('value');

        return $validator;
    }
}
