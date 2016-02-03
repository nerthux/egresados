<div class="generations form large-9 medium-8 columns content">
    <?= $this->Form->create($generation) ?>
    <fieldset>
        <legend><?= __('Add Generation') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('senior_year');
            echo $this->Form->input('forms._ids', ['options' => $forms]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
