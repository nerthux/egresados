<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <p><?= __('Se ha enviado un SMS a tu telefono celuar con un codigo, ingresa el codigo para continuar') ?></p>

        <?=  $this->Form->input('sms_input_code') ?>

    </fieldset>
<?=  $this->Form->button(__('Submit,,'), ['class' => 'btn btn-primary block full-width m-b',
                                                'templates' => [
                                                        'button' => '<button>{{text}}</button>']])
?>
<?= $this->Form->end() ?>
</div>

