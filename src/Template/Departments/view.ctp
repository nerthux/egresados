<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Department'), ['action' => 'edit', $department->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Department'), ['action' => 'delete', $department->id], ['confirm' => __('Are you sure you want to delete # {0}?', $department->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Careers'), ['controller' => 'Careers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Career'), ['controller' => 'Careers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="departments view large-9 medium-8 columns content">
    <h3><?= h($department->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Code') ?></th>
            <td><?= h($department->code) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($department->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($department->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($department->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($department->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Careers') ?></h4>
        <?php if (!empty($department->careers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Code') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Department Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($department->careers as $careers): ?>
            <tr>
                <td><?= h($careers->id) ?></td>
                <td><?= h($careers->code) ?></td>
                <td><?= h($careers->name) ?></td>
                <td><?= h($careers->department_id) ?></td>
                <td><?= h($careers->created) ?></td>
                <td><?= h($careers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Careers', 'action' => 'view', $careers->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Careers', 'action' => 'edit', $careers->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Careers', 'action' => 'delete', $careers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $careers->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
