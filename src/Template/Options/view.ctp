<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Option'), ['action' => 'edit', $option->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Option'), ['action' => 'delete', $option->id], ['confirm' => __('Are you sure you want to delete # {0}?', $option->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Options'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Option'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="options view large-9 medium-8 columns content">
    <h3><?= h($option->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Text') ?></th>
            <td><?= h($option->text) ?></td>
        </tr>
        <tr>
            <th><?= __('Value') ?></th>
            <td><?= h($option->value) ?></td>
        </tr>
        <tr>
            <th><?= __('Question') ?></th>
            <td><?= $option->has('question') ? $this->Html->link($option->question->label, ['controller' => 'Questions', 'action' => 'view', $option->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($option->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($option->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($option->modified) ?></td>
        </tr>
    </table>
</div>
