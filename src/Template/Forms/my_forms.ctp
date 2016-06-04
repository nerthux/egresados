<?php if ($this->request->session()->read('Auth.User.email_verified')): ?>
    <div class="alert-success lead bold"> Aww Yeah!!! Tu email fue validado </div>
<?php endif; ?>

<?php if ($this->request->session()->read('Auth.User.sms_verified')): ?>
    <div class="alert-success lead bold"> Awww Yeah!!! Tu teléfono móvil fue validado </div>
<?php endif; ?>

<div class="forms index large-9 medium-8 columns content">
    <h3><?= __('Forms') ?></h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th> Progress  </th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($forms as $form): ?>
            <tr>
                <td><?= h($form->name) ?></td>
                <td> <?= $total_answers[$form->id] . " de " . $total_questions[$form->id] ." ". (($total_answers[$form->id] /$total_questions[$form->id] ) * 100) . "%"  ?> </td>
                <td class="actions">
                    <?= $this->Html->link($this->Html->icon('play'), ['action' => 'view', $form->id], ['escape' => false]) ?>
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
