<div class="forms view large-9 medium-8 columns content">
   <div class="related">
    <h4><?= __('Questions') ?></h4>
    <?php if (!empty($form->questions)): ?>
        <?= $this->Form->create(null, ['url' => ['controller' => 'QuestionsUsers', 'action' => 'add']]) ?>
        <?php
          foreach ($form->questions as $key => $value)
          {
            $ordering[$key] = $value['ordering'];
          }
          array_multisort($ordering, SORT_ASC, $form->questions); 
        ?>
           <?php foreach ($form->questions as $question): ?>
                <?= $this->Form->label($question->id, $question->label); ?>
                <?php foreach ( $question->options as $option ) {
                  $options[] = ['value' => $option->value, 'text' => $option->text];
                } ?>
                <?= $this->Form->radio($question->id, $options); ?>
                <?php $options = array(); ?>
           <?php endforeach; ?>
        <?= $this->Form->submit(); ?>
    <?php endif; ?>
    </div>
</div>
