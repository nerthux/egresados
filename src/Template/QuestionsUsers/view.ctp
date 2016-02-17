<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Questions User'), ['action' => 'edit', $questionsUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Questions User'), ['action' => 'delete', $questionsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionsUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questions Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questions User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questionsUsers view large-9 medium-8 columns content">
    <h3><?= h($questionsUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $questionsUser->has('user') ? $this->Html->link($questionsUser->user->username, ['controller' => 'Users', 'action' => 'view', $questionsUser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Question') ?></th>
            <td><?= $questionsUser->has('question') ? $this->Html->link($questionsUser->question->label, ['controller' => 'Questions', 'action' => 'view', $questionsUser->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Value') ?></th>
            <td><?= h($questionsUser->value) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($questionsUser->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($questionsUser->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($questionsUser->modified) ?></td>
        </tr>
    </table>
</div>
