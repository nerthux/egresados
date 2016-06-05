<?php
$answerz = [];

foreach ( $answers as $answer)
  $answerz[$answer->question_id] = $answer->value;

/* This code arrange the order of the questions by its ordering value */
foreach ($form->questions as $key => $value)
  $ordering[$key] = $value['ordering'];

array_multisort($ordering, SORT_ASC, $form->questions); 
?>

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
