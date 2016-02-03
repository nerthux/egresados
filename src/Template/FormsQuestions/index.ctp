<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Forms Question'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Forms'), ['controller' => 'Forms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Form'), ['controller' => 'Forms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="formsQuestions index large-9 medium-8 columns content">
    <h3><?= __('Forms Questions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('form_id') ?></th>
                <th><?= $this->Paginator->sort('question_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($formsQuestions as $formsQuestion): ?>
            <tr>
                <td><?= $this->Number->format($formsQuestion->id) ?></td>
                <td><?= $formsQuestion->has('form') ? $this->Html->link($formsQuestion->form->name, ['controller' => 'Forms', 'action' => 'view', $formsQuestion->form->id]) : '' ?></td>
                <td><?= $formsQuestion->has('question') ? $this->Html->link($formsQuestion->question->id, ['controller' => 'Questions', 'action' => 'view', $formsQuestion->question->id]) : '' ?></td>
                <td><?= h($formsQuestion->created) ?></td>
                <td><?= h($formsQuestion->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $formsQuestion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $formsQuestion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $formsQuestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formsQuestion->id)]) ?>
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
