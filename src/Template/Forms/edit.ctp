	<div class="col-sm-7">
	    <?= $this->Form->create($form) ?>
	    <fieldset>
		<legend><?= __('Edit Form') ?></legend>
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

		<div class="col-sm-3">
			<?= $this->Form->button('Add New Generations', [
				'type' => 'button',
				'data-toggle' => 'modal',
				'data-target' => '#ModalGenerations'
			]) ?>

                        <?= $this->Form->button('Add New Career', [
                                'type' => 'button',
                                'data-toggle' => 'modal',
                                'data-target' => '#ModalCareers'
                        ]) ?>

		</div>
	</div>

	<div class="row  border-bottom white-bg dashboard-header">
		<div class="col-sm-7">
			<?=  $this->Form->input('questions._ids', ['multiple' => 'checkbox']) ?>
			<?php  $i = 0; 
				foreach ($questionz as $question) {
					echo $this->Form->checkbox('question[]'); echo $question->label . "<br />";
					$i++;
				}
			?>
			</fieldset>

			<?=  $this->Form->button(__('Submit'), ['class' => 'btn btn-primary block full-width m-b'])?>

			<?= $this->Form->end() ?>
		</div>

		<div class="col-sm-3">

			<?= $this->Form->button('Add New Question', [
				'data-toggle' => 'modal',
				'data-target' => '#MyModal1'
			]) ?>
		</div>
	</div>

	<div class="row  border-bottom white-bg dashboard-header">
		<div class="col-sm-7">

	<?php
	    // Here starts modal for generations
	    echo $this->Modal->create("Add Generation", ['id' => 'ModalGenerations', 'close' => false]) ; 
	?>
	    <?= $this->Form->create(null, ['url' => ['controller' => 'Generations', 'action' => 'add']]) ?>
	    <fieldset>
		<?php
		    echo $this->Form->input('title');
		    echo $this->Form->input('senior_year');
		    echo $this->Form->hidden('form_id', ['value' => $form->id]);
		    echo $this->Form->hidden('src_controller', ['value' => 'Forms']);
		    echo $this->Form->hidden('src_action', ['value' => 'edit']);
		?>
	    </fieldset>
	    <?=  $this->Form->button(__('Submit'), ['class' => 'btn btn-primary block full-width m-b'])?>
	    <?= $this->Form->end() ?>


	<?php
	    echo $this->Modal->end([
		$this->Form->button('Close', ['data-dismiss' => 'modal']) 
	    ]);
	    // End Modal for Generation
	?>

        <?php
            // Here starts modal for Career
            echo $this->Modal->create("Add Career", ['id' => 'ModalCareers', 'close' => false]) ;
        ?>
            <?= $this->Form->create(null, ['url' => ['controller' => 'Career', 'action' => 'add']]) ?>
            <fieldset>
                <?php
  		    echo $this->Form->input('code');
            	    echo $this->Form->input('name');
            	    echo $this->Form->input('department_id', ['options' => $departments]);
                    echo $this->Form->hidden('form_id', ['value' => $form->id]);
                    echo $this->Form->hidden('src_controller', ['value' => 'Forms']);
                    echo $this->Form->hidden('src_action', ['value' => 'edit']);
                ?>
            </fieldset>
            <?=  $this->Form->button(__('Submit'), ['class' => 'btn btn-primary block full-width m-b'])?>
            <?= $this->Form->end() ?>


        <?php
            echo $this->Modal->end([
                $this->Form->button('Close', ['data-dismiss' => 'modal'])
            ]);
            // End Modal for Careers
        ?>
           
		</div>
