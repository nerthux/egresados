<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $formsGeneration->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $formsGeneration->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Forms Generations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Forms'), ['controller' => 'Forms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Form'), ['controller' => 'Forms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Generations'), ['controller' => 'Generations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Generation'), ['controller' => 'Generations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="formsGenerations form large-9 medium-8 columns content">
    <?= $this->Form->create($formsGeneration) ?>
    <fieldset>
        <legend><?= __('Edit Forms Generation') ?></legend>
        <?php
            echo $this->Form->input('form_id', ['options' => $forms]);
            echo $this->Form->input('generation_id', ['options' => $generations]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
