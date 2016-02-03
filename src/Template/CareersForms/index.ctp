<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Careers Form'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Careers'), ['controller' => 'Careers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Career'), ['controller' => 'Careers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Forms'), ['controller' => 'Forms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Form'), ['controller' => 'Forms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="careersForms index large-9 medium-8 columns content">
    <h3><?= __('Careers Forms') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('career_id') ?></th>
                <th><?= $this->Paginator->sort('form_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($careersForms as $careersForm): ?>
            <tr>
                <td><?= $this->Number->format($careersForm->id) ?></td>
                <td><?= $careersForm->has('career') ? $this->Html->link($careersForm->career->name, ['controller' => 'Careers', 'action' => 'view', $careersForm->career->id]) : '' ?></td>
                <td><?= $careersForm->has('form') ? $this->Html->link($careersForm->form->name, ['controller' => 'Forms', 'action' => 'view', $careersForm->form->id]) : '' ?></td>
                <td><?= h($careersForm->created) ?></td>
                <td><?= h($careersForm->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $careersForm->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $careersForm->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $careersForm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $careersForm->id)]) ?>
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
