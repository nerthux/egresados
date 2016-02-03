<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FormsQuestion Entity.
 *
 * @property int $id
 * @property int $form_id
 * @property \App\Model\Entity\Form $form
 * @property int $question_id
 * @property \App\Model\Entity\Question $question
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class FormsQuestion extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
