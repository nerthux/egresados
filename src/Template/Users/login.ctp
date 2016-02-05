<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <p><?= __('Please enter your username and password') ?></p>
        <?php    echo $this->Form->input('username', [
                                                'placeholder' => 'Usuario',
                                                'templates' => [
                                                        'formGroup' => '{{input}}']]);


            echo $this->Form->input('password', [
                                                'placeholder' => 'Contraseña',
                                                'templates' => [
                                                        'formGroup' => '{{input}}']]);
	?>
    </fieldset>
<?=  $this->Form->button(__('Submit,,'), ['class' => 'btn btn-primary block full-width m-b',
                                                'templates' => [
                                                        'button' => '<button>{{text}}</button>']])
?>
<?= $this->Form->end() ?>
		<a href="#"><small>Forgot password?</small></a>

                <p class="text-muted text-center"><small>Do not have an account?</small></p>

                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>

</div>

