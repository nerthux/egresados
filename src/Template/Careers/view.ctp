<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Career'), ['action' => 'edit', $career->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Career'), ['action' => 'delete', $career->id], ['confirm' => __('Are you sure you want to delete # {0}?', $career->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Careers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Career'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Forms'), ['controller' => 'Forms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Form'), ['controller' => 'Forms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="careers view large-9 medium-8 columns content">
    <h3><?= h($career->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Code') ?></th>
            <td><?= h($career->code) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($career->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($career->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($career->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($career->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($career->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('First Name') ?></th>
                <th><?= __('Last Name') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Username') ?></th>
                <th><?= __('Password') ?></th>
                <th><?= __('Student Id Number') ?></th>
                <th><?= __('Email Validation Code') ?></th>
                <th><?= __('Email Verified') ?></th>
                <th><?= __('Mobile Phone Number') ?></th>
                <th><?= __('Sms Validation Code') ?></th>
                <th><?= __('Sms Verified') ?></th>
                <th><?= __('Password Recovery Hash') ?></th>
                <th><?= __('Role') ?></th>
                <th><?= __('Generation Id') ?></th>
                <th><?= __('Career Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($career->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->first_name) ?></td>
                <td><?= h($users->last_name) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->student_id_number) ?></td>
                <td><?= h($users->email_validation_code) ?></td>
                <td><?= h($users->email_verified) ?></td>
                <td><?= h($users->mobile_phone_number) ?></td>
                <td><?= h($users->sms_validation_code) ?></td>
                <td><?= h($users->sms_verified) ?></td>
                <td><?= h($users->password_recovery_hash) ?></td>
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
    <div class="related">
        <h4><?= __('Related Forms') ?></h4>
        <?php if (!empty($career->forms)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($career->forms as $forms): ?>
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
</div>
