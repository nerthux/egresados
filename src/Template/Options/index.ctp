<div class="options index large-9 medium-8 columns content">
    <h3><?= __('Options') ?></h3>
    <table class="table table-striped">
        <thead>
            <tr>
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
                <td><?= h($option->text) ?></td>
                <td><?= h($option->value) ?></td>
                <td><?= $option->has('question') ? $this->Html->link($option->question->label, ['controller' => 'Questions', 'action' => 'view', $option->question->id]) : '' ?></td>
                <td><?= h($option->created) ?></td>
                <td><?= h($option->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link($this->Html->icon('file'), ['action' => 'view', $option->id], ['escape' => false]) ?>
                    <?= $this->Html->link($this->Html->icon('edit'), ['action' => 'edit', $option->id], ['escape' => false]) ?>
                    <?= $this->Form->postLink($this->Html->icon('erase'), ['action' => 'delete', $option->id], ['confirm' => __('Are you sure you want to delete # {0}?',
                                                                                                                $option->id), 'escape' => false]) ?>

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
