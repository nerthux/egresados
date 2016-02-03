<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Options'), ['controller' => 'Options', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Option'), ['controller' => 'Options', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Forms'), ['controller' => 'Forms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Form'), ['controller' => 'Forms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questions view large-9 medium-8 columns content">
    <h3><?= h($question->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Label') ?></th>
            <td><?= h($question->label) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($question->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($question->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($question->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Type') ?></h4>
        <?= $this->Text->autoParagraph(h($question->type)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Options') ?></h4>
        <?php if (!empty($question->options)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Text') ?></th>
                <th><?= __('Value') ?></th>
                <th><?= __('Question Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($question->options as $options): ?>
            <tr>
                <td><?= h($options->id) ?></td>
                <td><?= h($options->text) ?></td>
                <td><?= h($options->value) ?></td>
                <td><?= h($options->question_id) ?></td>
                <td><?= h($options->created) ?></td>
                <td><?= h($options->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Options', 'action' => 'view', $options->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Options', 'action' => 'edit', $options->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Options', 'action' => 'delete', $options->id], ['confirm' => __('Are you sure you want to delete # {0}?', $options->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Forms') ?></h4>
        <?php if (!empty($question->forms)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($question->forms as $forms): ?>
            <tr>
                <td><?= h($forms->id) ?></td>
                <td><?= h($forms->name) ?></td>
                <td><?= h($forms->created) ?></td>
                <td><?= h($forms->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Forms', 'action' => 'view', $forms->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Forms', 'action' => 'edit', $forms->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Forms', 'action' => 'delete', $forms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $forms->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($question->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('First Name') ?></th>
                <th><?= __('Last Name') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Username') ?></th>
                <th><?= __('Password') ?></th>
                <th><?= __('Student Id Number') ?></th>
                <th><?= __('Role') ?></th>
                <th><?= __('Generation Id') ?></th>
                <th><?= __('Career Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($question->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->first_name) ?></td>
                <td><?= h($users->last_name) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->student_id_number) ?></td>
                <td><?= h($users->role) ?></td>
                <td><?= h($users->generation_id) ?></td>
                <td><?= h($users->career_id) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
