<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $option->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $option->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Options'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="options form large-9 medium-8 columns content">
    <?= $this->Form->create($option) ?>
    <fieldset>
        <legend><?= __('Edit Option') ?></legend>
        <?php
            echo $this->Form->input('text');
            echo $this->Form->input('value');
            echo $this->Form->input('question_id', ['options' => $questions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
