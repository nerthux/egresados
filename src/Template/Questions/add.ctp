<div class="questions form large-9 medium-8 columns content">
    <?= $this->Form->create($question) ?>
    <fieldset>
        <legend><?= __('Add Question') ?></legend>
        <?php
            echo $this->Form->input('label');
            echo $this->Form->input('type', ['options' => ['radio' => 'Radio', 'text' => 'Text', 'checkbox' => 'Checkbox', 'select' => 'Select']]);
            echo $this->Form->input('forms._ids', ['options' => $forms]);
        ?>
    </fieldset>
    <?=  $this->Form->button(__('Submit'), ['class' => 'btn btn-primary block full-width m-b'])?>
    <?= $this->Form->end() ?>
</div>
