<?php if ($this->request->session()->read('Auth.User.email_verified')): ?>
  <div class="alert-success lead bold"> Aww Yeah!!! Tu email fue validado </div>
<?php else: ?>
  <div class="alert-danger lead bold"> Oh no!!! Tu email no esta verificado </div>
<?php endif; ?>

<?php if ($this->request->session()->read('Auth.User.sms_verified')): ?>
    <div class="alert-success lead bold"> Yuhuuuuu!!! Tu teléfono móvil fue verificado </div>
<?php else: ?>
  <div class="alert-danger lead bold"> Buuuuuuu!!! Tu teléfono móvil no esta verificado </div>
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
            <?php
              $total_answer = $total_answers[$form->id];
              $total_question = $total_questions[$form->id];
              $total_percent = (($total_answer/$total_question)*100);
            ?>
            <tr>
                <td><?= h($form->name) ?></td>
                <td> 
                  <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?= $total_percent ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?= $total_percent ?>%">
                  <span ><?= $total_answer . " de " . $total_question . " " . $total_percent ?>% Complete</span>
                    </div>
                  </div>
                </td>
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
