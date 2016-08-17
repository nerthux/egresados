<?php
namespace App\Model\Table;

use App\Model\Entity\Form;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Forms Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Careers
 * @property \Cake\ORM\Association\BelongsToMany $Generations
 * @property \Cake\ORM\Association\BelongsToMany $Questions
 */
class FormsTable extends Table
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

        $this->table('forms');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Careers', [
            'foreignKey' => 'form_id',
            'targetForeignKey' => 'career_id',
            'joinTable' => 'careers_forms'
        ]);
        $this->belongsToMany('Generations', [
            'foreignKey' => 'form_id',
            'targetForeignKey' => 'generation_id',
            'joinTable' => 'forms_generations'
        ]);
        $this->hasMany('Questions', [
            'foreignKey' => 'form_id',
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
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['name']));
        return $rules;
    }
}
