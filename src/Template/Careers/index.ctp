<div class="careers index large-9 medium-8 columns content">
    <h3><?= __('Careers') ?></h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('code') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('department_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($careers as $career): ?>
            <tr>
                <td><?= h($career->code) ?></td>
                <td><?= h($career->name) ?></td>
                <td><?= $career->has('department') ? $this->Html->link($career->department->name, ['controller' => 'Departments', 'action' => 'view', $career->department->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $career->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $career->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $career->id], ['confirm' => __('Are you sure you want to delete # {0}?', $career->id)]) ?>
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
