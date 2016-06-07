<div class="col-md-6 col-sm-3 pull-left highlighted fill">
  <h1> ¡ Bienvenido Egresados ! </h1>
  <h3> ¿ Eres egresado del Tecnológico de Tijuana ? </h3>
  <p> Este espacio fue creado para tí, el Instituto Tecnológico de Tijuana ha creado el Sistema de Seguimiento de Egresados 
      para mantenernos en contacto contigo. Nos interesa saber acerca de ti, informarte sobre eventos especiales para egresados,
      involucrarte en nuestros proyectos de vinculación y sobretodo recordarte que esta siempre será tu casa.
  </p>
  <h4> Closed BETA </h4>
  <p> Este sitio está en su fase de pruebas, si tu carrera o generación no se encuentran en la lista, próximamente lo estarán.</p>
</div>

<div class="col-md-6 col-sm-3 pull-right highlighted fill">
  <div id="register" class="tab-pane fade in active">
    <h3> Registrate y mantente en contacto</h3>
    <div class="innter-form">
      <?= $this->Form->create($user, ['class' => 'm-t']) ?>
      <div class= "row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <?= $this->Form->input('first_name',
              [ 'placeholder' => 'Nombre',
                'templates' => [
                  'formGroup' => '{{input}}']
                ]) ?>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <?= $this->Form->input('last_name', [
                    'placeholder' => 'Apellido',
                    'templates' => [
                      'formGroup' => '{{input}}']
                    ]) ?>
        </div>
      </div>
      <div class= "row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <?= $this->Form->input('email', [
                    'placeholder' => 'E-mail',
                    'templates' => [
                      'formGroup' => '{{input}}']
                    ]) ?>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <?= $this->Form->input('student_id_number', [
                            'placeholder' => '#Control (Opcional)',
                            'templates' => [
                              'formGroup' => '{{input}}']
                            ]) ?>
        </div>
      </div>  
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">     
           <?= $this->Form->input('username', [
                    'placeholder' => 'Usuario',
                    'templates' => [
                      'formGroup' => '{{input}}']
                    ]) ?>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <?= $this->Form->input('password', [
                          'placeholder' => 'Contraseña',
                          'templates' => [
                            'formGroup' => '{{input}}']
                          ]) ?>
        </div>
      </div>
      <div class="row" >
        <div class="col-xs-6 col-sm-6 col-md-6">
          <?= $this->Form->input('generation_id', ['options' => $generations,
                          'templates' => [
                            'formGroup' => '{{input}}']
                          ]) ?>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <?= $this->Form->input('career_id', ['options' => $careers,
                          'templates' => [
                            'formGroup' => '{{input}}']
                          ]) ?>
        </div>
      </div>
      <div class= "row" >
        <div class="col-xs-6 col-sm-6 col-md-6">
          <?= $this->Recaptcha->display() ?>
        </div>
      </div>

      <?= $this->Form->button(__('Submit'), ['class' => 'breath btn-block btn-primary full-width m-b',
                                          'templates' => [
                                            'button' => '<button>{{text}}</button>']
                                          ]) ?>
      <?= $this->Form->end() ?>

    </div>
  </div>
</div>
