<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Careers Form'), ['action' => 'edit', $careersForm->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Careers Form'), ['action' => 'delete', $careersForm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $careersForm->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Careers Forms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Careers Form'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Careers'), ['controller' => 'Careers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Career'), ['controller' => 'Careers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Forms'), ['controller' => 'Forms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Form'), ['controller' => 'Forms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="careersForms view large-9 medium-8 columns content">
    <h3><?= h($careersForm->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Career') ?></th>
            <td><?= $careersForm->has('career') ? $this->Html->link($careersForm->career->name, ['controller' => 'Careers', 'action' => 'view', $careersForm->career->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Form') ?></th>
            <td><?= $careersForm->has('form') ? $this->Html->link($careersForm->form->name, ['controller' => 'Forms', 'action' => 'view', $careersForm->form->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($careersForm->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($careersForm->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($careersForm->modified) ?></td>
        </tr>
    </table>
</div>
