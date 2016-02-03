<div class="generations index large-9 medium-8 columns content">
    <h3><?= __('Generations') ?></h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('senior_year') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($generations as $generation): ?>
            <tr>
                <td><?= h($generation->title) ?></td>
                <td><?= $this->Number->format($generation->senior_year) ?></td>
                <td><?= h($generation->created) ?></td>
                <td><?= h($generation->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $generation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $generation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $generation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generation->id)]) ?>
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
