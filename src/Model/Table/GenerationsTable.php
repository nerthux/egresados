<?php
namespace App\Model\Table;

use App\Model\Entity\Generation;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Generations Model
 *
 * @property \Cake\ORM\Association\HasMany $Users
 * @property \Cake\ORM\Association\BelongsToMany $Forms
 */
class GenerationsTable extends Table
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

        $this->table('generations');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Users', [
            'foreignKey' => 'generation_id'
        ]);
        $this->belongsToMany('Forms', [
            'foreignKey' => 'generation_id',
            'targetForeignKey' => 'form_id',
            'joinTable' => 'forms_generations'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title')
            ->add('title', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->add('senior_year', 'valid', ['rule' => 'numeric'])
            ->requirePresence('senior_year', 'create')
            ->notEmpty('senior_year');

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
        $rules->add($rules->isUnique(['title']));
        return $rules;
    }
}
