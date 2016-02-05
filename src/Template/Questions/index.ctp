<div class="questions index large-9 medium-8 columns content">
    <h3><?= __('Questions') ?></h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('label') ?></th>
                <th><?= $this->Paginator->sort('ordering') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questions as $question): ?>
            <tr>
                <td><?= h($question->label) ?></td>
                <td><?= h($question->ordering) ?></td>
                <td><?= h($question->created) ?></td>
                <td><?= h($question->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link($this->Html->icon('file'), ['action' => 'view', $question->id], ['escape' => false]) ?>
                    <?= $this->Html->link($this->Html->icon('edit'), ['action' => 'edit', $question->id], ['escape' => false]) ?>
                    <?= $this->Form->postLink($this->Html->icon('erase'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?',
                                                                                                                $question->id), 'escape' => false]) ?>

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
