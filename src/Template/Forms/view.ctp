<?php
$answerz = [];

foreach ( $answers as $answer)
  $answerz[$answer->question_id] = $answer->value;

/* This code arrange the order of the questions by its ordering value */
foreach ($form->questions as $key => $value)
  $ordering[$key] = $value['ordering'];

array_multisort($ordering, SORT_ASC, $form->questions); 
?>

  <div class="container">
    <div class="row">
      <div class="col-md-12 main-title">
        <h1>Branching wizard</h1>
        <p>You see different steps depending on your answers.</p>
      </div>
    </div>
  </div>

  <section class="container" id="main">

<!-- Start Survey container -->
<div id="survey_container">

  <div id="top-wizard">
    <strong>Progress </strong>
    <div id="progressbar"></div>
      <div class="shadow"></div>
  </div><!-- end top-wizard -->

  <form name="survey_container" action="" method="POST">
  <div id="middle-wizard">


  <?php
  foreach ($form->questions as $question) {
    echo '<div class="step row" >';
    echo '  <div class="col-md-10">';
    echo "    <h3>$question->label</h3>";
    echo '    <ul class="data-list-2" >';

      foreach ( $question->options as $option ) {
      if ( array_key_exists( $question->id, $answerz)) {
        if ( $answerz[$question->id] == $option->value) {
          echo "<li><label for='$question->id-$option-value' class='radio-inline'>";
          echo "<input type='radio' name='$question->id' checked='checked' value='$option->value' id='$question->id-$option-value'>  $option->text";
          echo "</label></li>";
        } else {
          echo "<li><label for='$question->id- $option-value' class='radio-inline'>";
          echo "<input type='radio' name='$question->id' value='$option->value' id='$question->id-$option-value'>  $option->text";
          echo "</label></li>";
        }
      } else {
        echo "<li><label for='$question->id-$option-value' class='radio-inline'>";
        echo "<input type='radio' name='$question->id' value='$option->value' id='$question->id-$option-value'>  $option->text";
       echo "</label></li>";
      }
    }
    echo '    </ul>';
    echo '  </div>';
    echo '</div>';
  }
          ?>
  <div class="submit step complete" id="satisfied">
    <i class="icon-check"></i>
    <h3>Terminamos!!! Gracias por tu tiempo.</h3>
      <button type="submit" name="process" class="submit">Enviar encuesta</button>
  </div><!-- end submit step -->
</div><!-- end middle-wizard -->

<div id="bottom-wizard">
  <button type="button" name="backward" class="backward">Atras</button>
  <button type="button" name="forward" class="forward">Siguiente </button>
  <button type="submit" name="process" class="forward">Guardar Ahora</button>
</div><!-- end bottom-wizard -->
</form>
</div><!-- end Survey container -->
</section><!-- end section main container -->


<div class="forms view large-9 medium-8 columns content my-form">
   <div class="related">
    <h4><?= __('Questions') ?></h4>

    <?php if (!empty($form->questions)): ?>
        <form method="post" accept-charset="utf-8" role="form" action="/questions-users/add">
          <div style="display:none;">
            <input type="hidden" name="_method" class="form-control"  value="POST" />
            <input type="hidden" name="form_id" id="form_id" value="<?= $form->id ?>" />
          </div>

          <?php
          foreach ($form->questions as $question) {

            echo "<label class='control-label' for='$question->id'> $question->label</label>";
            echo "<div class='radio'>";

            foreach ( $question->options as $option ) {
              if ( array_key_exists( $question->id, $answerz)) {
                if ( $answerz[$question->id] == $option->value) {
                  echo "<label for='$question->id-$option-value' class='radio-inline'>";
                  echo "<input type='radio' name='$question->id' checked='checked' value='$option->value' id='$question->id-$option-value'>  $option->text";
                  echo "</label>";
                } else {
                  echo "<label for='$question->id- $option-value' class='radio-inline'>";
                  echo "<input type='radio' name='$question->id' value='$option->value' id='$question->id-$option-value'>  $option->text";
                  echo "</label>";
                }
              } else {
                echo "<label for='$question->id-$option-value' class='radio-inline'>";
                echo "<input type='radio' name='$question->id' value='$option->value' id='$question->id-$option-value'>  $option->text";
                echo "</label>";
              }
            }
            echo "</div>";
            echo "<div class='clear' />";
          }
          ?>
          <input type="submit" value="Submit">
        </form>
        <?php endif; ?>
   </div>
</div>
