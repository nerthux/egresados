<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Option'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="options index large-9 medium-8 columns content">
    <h3><?= __('Options') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('text') ?></th>
                <th><?= $this->Paginator->sort('value') ?></th>
                <th><?= $this->Paginator->sort('question_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($options as $option): ?>
            <tr>
                <td><?= $this->Number->format($option->id) ?></td>
                <td><?= h($option->text) ?></td>
                <td><?= h($option->value) ?></td>
                <td><?= $option->has('question') ? $this->Html->link($option->question->label, ['controller' => 'Questions', 'action' => 'view', $option->question->id]) : '' ?></td>
                <td><?= h($option->created) ?></td>
                <td><?= h($option->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $option->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $option->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $option->id], ['confirm' => __('Are you sure you want to delete # {0}?', $option->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
