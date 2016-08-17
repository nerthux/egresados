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
  <div class="col-md-4">
    <?php if ($form->id): ?>
           <?= $this->Form->button(_('Add a new question'), ['data-toggle' => 'modal', 'data-target' => '#MyModal1']) ?>
    <?php endif; ?>
    
 </div>
</div>

<div class="row">
  <?=  $this->Form->button(__('Submit'), ['class' => 'btn btn-primary block full-width m-b', 'id' => 'add-question-btn'])?>
  <?= $this->Form->end() ?>
</div>

<!-- Here starts hidden modals -->

<?= $this->Modal->create(_('Add a new question'), ['id' => 'MyModal1', 'close' => false]) ?> 
  <?= $this->Form->create() ?>
    <?= $this->Form->input('label', ['class' => 'question-label']) ?>
    <button type="button" id="click" class="btn"><?= _('Add question') ?></button>
  <?= $this->Form->end() ?>
<?= $this->Modal->end() ?>

<!-- This hidden div is used inside the modal for options -->

<div id="add-options" class="hidden">
  <div id="questions-grid" >
    <table class="table" >
      <thead>
        <tr>
          <th> id </th>
          <th> label </th>
          <th> options </th>
        <tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</div>

<!-- This hidden div is used inside the modal for questions -->

<div id="add-option" class="hidden">
    <table class="table" >
      <thead>
        <tr>
          <th> text </th>
          <th> value </th>
          <th> action </th>
        <tr>
      </thead>
      <tbody>
      <tr>  <?= $this->Form->create() ?>
          <th> <?= $this->Form->input('text', ['templates' => ['formGroup' => '{{input}}']]) ?> <?= $this->Form->hidden('form_id', ['id' => 'hyde']) ?> </th>
          <th> <?= $this->Form->input('value',['templates' => ['formGroup' => '{{input}}']]) ?> </th>
          <th> <button type="button" id="add-opt" class="btn"><?= _('Add Option') ?></button></th>
        <tr>
      </tbody>
    </table>
</div>

<script>

$(document).ready(function(){

  $('#click').click(function(){
    var data = {
      label : $('.question-label').val(),
      type  : 'radio'
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
            $('#MyModal1 .modal-body').append($('#add-options').removeClass('hidden'));
            $('#MyModal1 .modal-body #add-options tbody').append('<tr><td>' + respuesta['id']+ ' </td> <td>' + respuesta['label'] + ' </td><td id=options-' + respuesta['id'] + '></td><tr>');
            $('#options-'+respuesta['id']).append($('#add-option').removeClass('hidden'));
            $('#options-'+respuesta['id'] + ' #hyde').val(respuesta['id']);

            $('#additional-opts .form-group').append('<div class="checkbox"><label for="questions-ids-' + respuesta['id'] + '"><input type="checkbox" checked="checked" name="questions[_ids][]" value="' + respuesta['id'] + '" id="questions-ids-' + respuesta['id'] + '">' + respuesta['label'] + '</label></div>');
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
