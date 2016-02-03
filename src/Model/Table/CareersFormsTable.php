<?php
namespace App\Model\Table;

use App\Model\Entity\CareersForm;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CareersForms Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Careers
 * @property \Cake\ORM\Association\BelongsTo $Forms
 */
class CareersFormsTable extends Table
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

        $this->table('careers_forms');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Careers', [
            'foreignKey' => 'career_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Forms', [
            'foreignKey' => 'form_id',
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
        $rules->add($rules->existsIn(['career_id'], 'Careers'));
        $rules->add($rules->existsIn(['form_id'], 'Forms'));
        return $rules;
    }
}
