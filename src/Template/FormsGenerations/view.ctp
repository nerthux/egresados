<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Forms Generation'), ['action' => 'edit', $formsGeneration->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Forms Generation'), ['action' => 'delete', $formsGeneration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formsGeneration->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Forms Generations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Forms Generation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Forms'), ['controller' => 'Forms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Form'), ['controller' => 'Forms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Generations'), ['controller' => 'Generations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Generation'), ['controller' => 'Generations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="formsGenerations view large-9 medium-8 columns content">
    <h3><?= h($formsGeneration->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Form') ?></th>
            <td><?= $formsGeneration->has('form') ? $this->Html->link($formsGeneration->form->name, ['controller' => 'Forms', 'action' => 'view', $formsGeneration->form->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Generation') ?></th>
            <td><?= $formsGeneration->has('generation') ? $this->Html->link($formsGeneration->generation->title, ['controller' => 'Generations', 'action' => 'view', $formsGeneration->generation->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($formsGeneration->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($formsGeneration->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($formsGeneration->modified) ?></td>
        </tr>
    </table>
</div>
