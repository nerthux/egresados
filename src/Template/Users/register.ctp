<p>Registrate y forma parte de la comunidad.</p>

    <?= $this->Form->create($user, ['class' => 'm-t']) ?>
        <?php
            echo $this->Form->input('first_name', [ 
						'placeholder' => 'Nombre',
    						'templates' => [
        						'formGroup' => '{{input}}']]);

            echo $this->Form->input('last_name', [
                                                'placeholder' => 'Apellido',
                                                'templates' => [
                                                        'formGroup' => '{{input}}']]);


            echo $this->Form->input('email', [
                                                'placeholder' => 'E-mail',
                                                'templates' => [
                                                        'formGroup' => '{{input}}']]);




            echo $this->Form->input('username', [
                                                'placeholder' => 'Usuario',
                                                'templates' => [
                                                        'formGroup' => '{{input}}']]);


            echo $this->Form->input('password', [
                                                'placeholder' => 'Contraseña',
                                                'templates' => [
                                                        'formGroup' => '{{input}}']]);


            echo $this->Form->input('student_id_number', [
                                                'placeholder' => '#Control',
                                                'templates' => [
                                                        'formGroup' => '{{input}}']]);

            echo $this->Form->input('generation_id', ['options' => $generations, 
						'templates' => [
                                                        'formGroup' => '{{input}}']]);

            echo $this->Form->input('career_id', ['options' => $careers, 
						'templates' => [
                                                        'formGroup' => '{{input}}']]);
       
    	    echo  $this->Recaptcha->display(); 
     	    echo  $this->Form->button(__('Submit'), ['class' => 'btn btn-primary block full-width m-b',
						'templates' => [
                                                        'button' => '<button>{{text}}</button>']]);
            echo $this->Form->end();
?>
