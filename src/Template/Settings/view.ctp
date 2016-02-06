<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Setting'), ['action' => 'edit', $setting->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Setting'), ['action' => 'delete', $setting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $setting->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Settings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Setting'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="settings view large-9 medium-8 columns content">
    <h3><?= h($setting->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Profile') ?></th>
            <td><?= h($setting->profile) ?></td>
        </tr>
        <tr>
            <th><?= __('Sms User') ?></th>
            <td><?= h($setting->sms_user) ?></td>
        </tr>
        <tr>
            <th><?= __('Sms Pass') ?></th>
            <td><?= h($setting->sms_pass) ?></td>
        </tr>
        <tr>
            <th><?= __('Sms From') ?></th>
            <td><?= h($setting->sms_from) ?></td>
        </tr>
        <tr>
            <th><?= __('Sms Apikey') ?></th>
            <td><?= h($setting->sms_apikey) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($setting->id) ?></td>
        </tr>
    </table>
</div>
