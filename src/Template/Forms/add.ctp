<div class= "row">
  <div class="col-md-8">
    <?= $this->Form->create($form) ?>
    <fieldset>
      <legend><?= __('Add Form') ?></legend>
      <?=  $this->Form->input('name') ?>
  </div>
</div>

<div class= "row">
  <div class="col-md-6">
    <?=  $this->Form->input('careers._ids', ['multiple' => 'checkbox']) ?>
  </div>
  <div class="col-md-6">
    <?=  $this->Form->input('generations._ids', ['multiple' => 'checkbox']) ?>
  </div>
</div>

<div class= "row">
  <div id="additional-opts" class="col-md-8">
    </fieldset>
  </div>
</div>

<div class="row">
  <?=  $this->Form->button(__('Submit'), ['class' => 'btn btn-primary block full-width m-b', 'id' => 'add-question-btn'])?>
  <?= $this->Form->end() ?>
</div>

<div id="question-form" class="container-fluid hidden">
  
</div>


<!-- Here starts hidden modals -->
<?php if ($form->id): ?>
      <div id="cf-question" class="container-fluid">
        <?= $this->Form->create() ?>
          <?= $this->Form->input('label', ['class' => 'question-label']) ?>
          <?= $this->Form->hidden('form_id', ['id' => 'form-id', 'value' => $form->id]) ?>
          <button type="button" id="click" class="btn"><?= _('Add question') ?></button>
        <?= $this->Form->end() ?>    
      </div>
<?php endif; ?>


<script>

$(document).ready(function(){

  $('#click').click(function(){
    var data = {
      label : $('.question-label').val(),
      type  : 'radio',
      form_id : $('#form-id').val(),
    };
    $.ajax({
      type: 'post',
      data: data,
      url: '/questions/add',
      beforeSend: function(xhr) {
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      },
      success: function(response) {
        respuesta = jQuery.parseJSON( response );
        console.log(respuesta);
          if(respuesta['status'] == 200){
            toastr.success(respuesta['msg']);
            /*$('#MyModal1 .modal-body').append($('#add-options').removeClass('hidden'));
            $('#MyModal1 .modal-body #add-options tbody').append('<tr><td>' + respuesta['id']+ ' </td> <td>' + respuesta['label'] + ' </td><td id=options-' + respuesta['id'] + '></td><tr>');
            $('#options-'+respuesta['id']).append($('#add-option').removeClass('hidden'));
            $('#options-'+respuesta['id'] + ' #hyde').val(respuesta['id']);

            $('#additional-opts .form-group').append('<div class="checkbox"><label for="questions-ids-' + respuesta['id'] + '"><input type="checkbox" checked="checked" name="questions[_ids][]" value="' + respuesta['id'] + '" id="questions-ids-' + respuesta['id'] + '">' + respuesta['label'] + '</label></div>');*/
            $('#question-form').append('<div clas="row"><div class="col-lg-12"><h3>' + respuesta['label'] + '</h3></div></div>').removeClass('hidden');
            $('#cf-question').addClass('hidden');

          }else{
            toastr.error("FAILED!!");
          }
        },
        error: function(e) {
          toastr.error("An error occurred: " + e.responseText.message);
          console.log(e);
        }
    });
  });

  $('#add-opt').click(function(){
    var data = {
      text : $('#questions-grid #text').val(),
      value  : $('#questions-grid #value').val(),
      question_id : $('#questions-grid #hyde').val()
    };
    $.ajax({
      type: 'post',
      data: data,
      url: '/options/add',
      beforeSend: function(xhr) {
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      },
        success: function(response) {
          respuesta = jQuery.parseJSON( response );
          console.log(respuesta);
          if(respuesta['status'] == 200){
            toastr.success(respuesta['msg']);
          }else{
            toastr.error("FAILED!!");
          }
        },
        error: function(e) {
          toastr.error("An error occurred: " + e.responseText.message);
          console.log(e);
        }
    });
  });
});
</script>
