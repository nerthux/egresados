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
