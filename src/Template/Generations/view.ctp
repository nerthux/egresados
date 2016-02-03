<div class="generations view large-9 medium-8 columns content">
    <h3><?= h($generation->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($generation->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($generation->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Senior Year') ?></th>
            <td><?= $this->Number->format($generation->senior_year) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($generation->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($generation->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($generation->users)): ?>
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
            <?php foreach ($generation->users as $users): ?>
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
    <div class="related">
        <h4><?= __('Related Forms') ?></h4>
        <?php if (!empty($generation->forms)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($generation->forms as $forms): ?>
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
