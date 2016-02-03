<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Forms Generation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Forms'), ['controller' => 'Forms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Form'), ['controller' => 'Forms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Generations'), ['controller' => 'Generations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Generation'), ['controller' => 'Generations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="formsGenerations index large-9 medium-8 columns content">
    <h3><?= __('Forms Generations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('form_id') ?></th>
                <th><?= $this->Paginator->sort('generation_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($formsGenerations as $formsGeneration): ?>
            <tr>
                <td><?= $this->Number->format($formsGeneration->id) ?></td>
                <td><?= $formsGeneration->has('form') ? $this->Html->link($formsGeneration->form->name, ['controller' => 'Forms', 'action' => 'view', $formsGeneration->form->id]) : '' ?></td>
                <td><?= $formsGeneration->has('generation') ? $this->Html->link($formsGeneration->generation->title, ['controller' => 'Generations', 'action' => 'view', $formsGeneration->generation->id]) : '' ?></td>
                <td><?= h($formsGeneration->created) ?></td>
                <td><?= h($formsGeneration->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $formsGeneration->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $formsGeneration->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $formsGeneration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formsGeneration->id)]) ?>
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
