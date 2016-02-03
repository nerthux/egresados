<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Forms Question'), ['action' => 'edit', $formsQuestion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Forms Question'), ['action' => 'delete', $formsQuestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formsQuestion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Forms Questions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Forms Question'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Forms'), ['controller' => 'Forms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Form'), ['controller' => 'Forms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="formsQuestions view large-9 medium-8 columns content">
    <h3><?= h($formsQuestion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Form') ?></th>
            <td><?= $formsQuestion->has('form') ? $this->Html->link($formsQuestion->form->name, ['controller' => 'Forms', 'action' => 'view', $formsQuestion->form->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Question') ?></th>
            <td><?= $formsQuestion->has('question') ? $this->Html->link($formsQuestion->question->id, ['controller' => 'Questions', 'action' => 'view', $formsQuestion->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($formsQuestion->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($formsQuestion->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($formsQuestion->modified) ?></td>
        </tr>
    </table>
</div>
