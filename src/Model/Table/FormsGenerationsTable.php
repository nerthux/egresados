<?php
namespace App\Model\Table;

use App\Model\Entity\FormsGeneration;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FormsGenerations Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Forms
 * @property \Cake\ORM\Association\BelongsTo $Generations
 */
class FormsGenerationsTable extends Table
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

        $this->table('forms_generations');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Forms', [
            'foreignKey' => 'form_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Generations', [
            'foreignKey' => 'generation_id',
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

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
        $rules->add($rules->existsIn(['form_id'], 'Forms'));
        $rules->add($rules->existsIn(['generation_id'], 'Generations'));
        return $rules;
    }
}
