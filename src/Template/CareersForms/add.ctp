<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Careers Forms'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Careers'), ['controller' => 'Careers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Career'), ['controller' => 'Careers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Forms'), ['controller' => 'Forms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Form'), ['controller' => 'Forms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="careersForms form large-9 medium-8 columns content">
    <?= $this->Form->create($careersForm) ?>
    <fieldset>
        <legend><?= __('Add Careers Form') ?></legend>
        <?php
            echo $this->Form->input('career_id', ['options' => $careers]);
            echo $this->Form->input('form_id', ['options' => $forms]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
