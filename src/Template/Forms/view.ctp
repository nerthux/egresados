<?php
$answerz = [];

foreach ( $answers as $answer)
  $answerz[$answer->question_id] = $answer->value;
?>

<div class="forms view large-9 medium-8 columns content">
   <div class="related">
    <h4><?= __('Questions') ?></h4>
    <?php if (!empty($form->questions)): ?>
        <?= $this->Form->create(null, ['url' => ['controller' => 'QuestionsUsers', 'action' => 'add']]) ?>

        <?php
          /* This code arrange the order of the questions by its ordering value */
          foreach ($form->questions as $key => $value)
          {
            $ordering[$key] = $value['ordering'];
          }
          array_multisort($ordering, SORT_ASC, $form->questions); 
        ?>

        <?php foreach ($form->questions as $question): ?>
          <?= $this->Form->label($question->id, $question->label); ?>

          <?php
            foreach ( $question->options as $option ) {
              if ( array_key_exists( $question->id, $answerz)) {

                if ( $answerz[$question->id] == $option->value) 
                  $options[] = ['value' => $option->value, 'text' => $option->text, 'checked' => 'checked'];

                else
                  $options[] = ['value' => $option->value, 'text' => $option->text];

              }
              else
                $options[] = ['value' => $option->value, 'text' => $option->text];
            }
          ?>
          <?= $this->Form->radio($question->id, $options); ?>
          <?php $options = array(); ?>
        <?php endforeach; ?>
        <?= $this->Form->hidden('form_id', ['value' => $form->id]); ?>
        <?= $this->Form->submit(); ?>
    <?php endif; ?>
    </div>
</div>
