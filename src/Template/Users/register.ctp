<p>Registrate y forma parte de la comunidad.</p>

  <?= $this->Form->create($user, ['class' => 'm-t']) ?>
  <?= $this->Form->input('first_name',
              [ 'placeholder' => 'Nombre',
                'templates' => [
                  'formGroup' => '{{input}}']
                ]) ?>

  <?= $this->Form->input('last_name', [
                    'placeholder' => 'Apellido',
                    'templates' => [
                      'formGroup' => '{{input}}']
                    ]) ?>
  <?= $this->Form->input('email', [
                    'placeholder' => 'E-mail',
                    'templates' => [
                      'formGroup' => '{{input}}']
                    ]) ?>

  <?= $this->Form->input('username', [
                    'placeholder' => 'Usuario',
                    'templates' => [
                      'formGroup' => '{{input}}']
                    ]) ?>

  <?= $this->Form->input('mobile_phone_number', [
                    'placeholder' => 'Num. Celular',
                    'templates' => [
                      'formGroup' => '{{input}}']
                    ]) ?>

  <?= $this->Form->input('password', [
                          'placeholder' => 'Contraseña',
                          'templates' => [
                            'formGroup' => '{{input}}']
                          ]) ?>


  <?= $this->Form->input('student_id_number', [
                            'placeholder' => '#Control',
                            'templates' => [
                              'formGroup' => '{{input}}']
                            ]) ?>

  <?= $this->Form->input('generation_id', ['options' => $generations,
                          'templates' => [
                            'formGroup' => '{{input}}']
                          ]) ?>

  <?= $this->Form->input('career_id', ['options' => $careers,
                          'templates' => [
                            'formGroup' => '{{input}}']
                          ]) ?>
  <?= $this->Recaptcha->display() ?>

  <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary block full-width m-b',
                                          'templates' => [
                                            'button' => '<button>{{text}}</button>']
                                          ]) ?>
  <?= $this->Form->end() ?>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
<?=             $this->Html->link(
                'Login',
                '/users/login',
                ['class' => 'btn btn-sm btn-white btn-block', 'target' => '_blank']
                )
?>

