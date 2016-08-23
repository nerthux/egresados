<div class="col-xs-12 col-sm-12 col-md-12">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit Profile') ?></legend>
        <div class= "row">

          <div class="col-xs-6 col-sm-6 col-md-6">
            <?= $this->Form->input('first_name') ?>
          </div>

          <div class="col-xs-6 col-sm-6 col-md-6">
            <?= $this->Form->input('last_name'); ?>
          </div>

        </div>

        <div class= "row">
         <div class="col-xs-6 col-sm-6 col-md-6">

          <?php
            if ( $user->email_verified )
              echo $this->Form->input('email', ['label' => 'Email (Verified)']);
            else
                echo $this->Form->input('email', ['label' => 'Email (NOT Verified)']);
        ?>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">

        <?php
            if ( $user->sms_verified ) {
                echo $this->Form->input('mobile_phone_number', ['label' => 'Mobile Phone ( Verified )']);
            } else {
                echo $this->Form->input('mobile_phone_number', ['label' => 'Mobile Phone ( NOT Verified)']);
                echo $this->Html->link(_('Verify Mobile NOW'),
                          '/users/sendSmsValidation',
                              ['class' => 'button', 'target' => '_blank']
                            );
            }
          ?>
        </div>
      </div>

       <div class= "row">

         <div class="col-xs-6 col-sm-6 col-md-6">
          <?= $this->Form->input('username')?>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
          <?= $this->Form->input('password') ?>
        </div>

      </div>

      <div class= "row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <?= $this->Form->input('student_id_number') ?>
        </div>
      </div>
      <div class= "row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <?= $this->Form->input('generation_id', ['options' => $generations]) ?>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <?= $this->Form->input('career_id', ['options' => $careers]) ?>
        </div>
      </div>
    </fieldset>
    <?=  $this->Form->button(__('Submit'), ['class' => 'btn btn-primary block full-width m-b'])?>
    <?= $this->Form->end() ?>
</div>
