<div class="col-sm-6">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('email');
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('student_id_number');
            echo $this->Form->input('role', ['options' => ['admin' => 'Admin', 'student' => 'Student', 'manager' => 'Manager']]);
            echo $this->Form->input('generation_id', ['options' => $generations]);
            echo $this->Form->input('career_id', ['options' => $careers]);
        ?>
    </fieldset>

    <?=  $this->Form->button(__('Submit'), ['class' => 'btn btn-primary block full-width m-b'])?>
    <?= $this->Form->end() ?>
</div>
