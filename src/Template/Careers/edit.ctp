<div class="careers form large-9 medium-8 columns content">
    <?= $this->Form->create($career) ?>
    <fieldset>
        <legend><?= __('Edit Career') ?></legend>
        <?php
            echo $this->Form->input('code');
            echo $this->Form->input('name');
            echo $this->Form->input('department_id', ['options' => $departments]);
            echo $this->Form->input('forms._ids', ['options' => $forms]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
