<div class="col-sm-6">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit Profile') ?></legend>
        <?php
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');

            if ( $user->email_verified )
              echo $this->Form->input('email', ['label' => 'Email (Verified)']);
            else
                echo $this->Form->input('email', ['label' => 'Email (NOT Verified)']);

            if ( $user->sms_verified ) {
                echo $this->Form->input('mobile_phone_number', ['label' => 'Mobile Phone ( Verified )']);
            } else {
                echo $this->Form->input('mobile_phone_number', ['label' => 'Mobile Phone ( NOT Verified)']);
                echo $this->Html->link(_('Verify Mobile NOW'),
                          '/users/sendSmsValidation',
                              ['class' => 'button', 'target' => '_blank']
                            );
            }

            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('student_id_number');
            echo $this->Form->input('generation_id', ['options' => $generations]);
            echo $this->Form->input('career_id', ['options' => $careers]);
        ?>
    </fieldset>
    <?=  $this->Form->button(__('Submit'), ['class' => 'btn btn-primary block full-width m-b'])?>
    <?= $this->Form->end() ?>
</div>
