<div class="forms index large-9 medium-8 columns content">
    <h3><?= __('Forms') ?></h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($forms as $form): ?>
            <tr>
                <td><?= h($form->name) ?></td>
                <td><?= h($form->created) ?></td>
                <td><?= h($form->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link($this->Html->icon('file'), ['action' => 'view', $form->id], ['escape' => false]) ?>
                    <?= $this->Html->link($this->Html->icon('edit'), ['action' => 'edit', $form->id], ['escape' => false]) ?>
                    <?= $this->Form->postLink($this->Html->icon('erase'), ['action' => 'delete', $form->id], ['confirm' => __('Are you sure you want to delete # {0}?', $form->id), 
														'escape' => false]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->Html->link( __('Add Form'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
