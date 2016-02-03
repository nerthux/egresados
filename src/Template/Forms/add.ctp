<div class="col-sm-7">
    <?= $this->Form->create($form) ?>
    <fieldset>
        <legend><?= __('Add Form') ?></legend>
        	<?=  $this->Form->input('name') ?>
        	</div>
</div>
		<div class="row  border-bottom white-bg dashboard-header">
<div class="col-sm-4">
            	<?=  $this->Form->input('careers._ids', ['multiple' => 'checkbox']) ?>
</div>
<div class="col-sm-3">
            	<?=  $this->Form->input('generations._ids', ['multiple' => 'checkbox']) ?>
</div>
</div>
<div class="row  border-bottom white-bg dashboard-header">
<div class="col-sm-7">
            	<?=  $this->Form->input('questions._ids', ['multiple' => 'checkbox']) ?>
    </fieldset>

    <?=  $this->Form->button(__('Submit'), ['class' => 'btn btn-primary block full-width m-b'])?>

    <?= $this->Form->end() ?>
</div>
<div class="col-sm-3">

   <?=  $this->Html->icon('edit') ?>


</div>
