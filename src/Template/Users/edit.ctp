<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('email');
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('student_id_number');
            echo $this->Form->input('role');
            echo $this->Form->input('generation_id', ['options' => $generations]);
            echo $this->Form->input('career_id', ['options' => $careers]);
            echo $this->Form->input('questions._ids', ['options' => $questions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
