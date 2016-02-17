<div class="forms form large-9 medium-8 columns content">
    <?= $this->Form->create($form) ?>
    <fieldset>
        <legend><?= __('Edit Form') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('careers._ids', ['multiple' => 'checkbox']);
            echo $this->Form->input('generations._ids', ['multiple' => 'checkbox']);
            echo $this->Form->input('questions._ids', ['multiple' => 'checkbox']);
      ?>
    </fieldset>
    <?=  $this->Form->button(__('Submit'), ['class' => 'btn btn-primary block full-width m-b'])?>
    <?= $this->Form->end() ?>
</div>
