<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Form;

/* @var $this yii\web\View */
/* @var $model app\models\Form */
/* @var $form yii\widgets\ActiveForm */

$lastform=Form::find()
    ->where(['author' => $_GET['userId']])
    ->orderBy(['created'=>SORT_DESC])
    ->one();


?>
<div class="row">
<div class="col-md-2"></div>
<div class="form-form col-md-8">
  <h3>To get started, let's write something you're grateful for!</h3>
   <hr />

    <?php $form = ActiveForm::begin(); ?>

     <?php echo $form->field($model,'author')->hiddenInput(['value'=>$_GET['userId']])->label(false); ?>

    <?= $form->field($model, 'whygrateful')->textArea(['maxlength' => true]) ?>
    <hr />
    <h3>Please write three things you're happy about from the past week.</h3>
    <hr />

    <?= $form->field($model, 'threethingshappy1')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'threethingshappy2')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'threethingshappy3')->textArea(['maxlength' => true]) ?>
       <hr />
    <h3>Now three things you're less happy about from the last week</h3>
    <hr />

    <?= $form->field($model, 'threethingsunhappy1')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'threethingsunhappy2')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'threethingsunhappy3')->textArea(['maxlength' => true]) ?>
    <hr />
    <h3>What could you do to change these things in future?</h3>
    <hr />

    <?= $form->field($model, 'threeimprovements1')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'threeimprovements2')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'threeimprovements3')->textArea(['maxlength' => true]) ?>
         <hr />
    <h3>Complete the table indicating your score for different areas of life and any comments</h3>
    <hr />
    
    <table style="width: 100%" class="table">
            <tr><td>Area</td><td>Score (0-100)</td><td>Comments</td></tr>
          
      <tr><td>Health</td><td> <?= $form->field($model, 'healthscore')->dropDownList(range(1, 100))->label(false); ?></td><td><?= $form->field($model, 'healthcomment')->textArea()->label(false) ?></td></tr>
           <tr><td>Finances</td><td> <?= $form->field($model, 'financesscore')->dropDownList(range(1, 100))->label(false); ?></td><td><?= $form->field($model, 'financescomment')->textArea()->label(false) ?></td></tr>
                      <tr><td>Work (you)</td><td> <?= $form->field($model, 'workyouscore')->dropDownList(range(1, 100))->label(false); ?></td><td><?= $form->field($model, 'workyoucomment')->textArea()->label(false) ?></td></tr>
                      
                                       <tr><td>Work (others)</td><td> <?= $form->field($model, 'workothersscore')->dropDownList(range(1, 100))->label(false); ?></td><td><?= $form->field($model, 'workotherscomment')->textArea()->label(false) ?></td></tr>
                                       
                                             <tr><td>Experience</td><td> <?= $form->field($model, 'experiencescore')->dropDownList(range(1, 100))->label(false); ?></td><td><?= $form->field($model, 'experiencecomment')->textArea()->label(false) ?></td></tr>
                                             
                                                     <tr><td>Impact</td><td> <?= $form->field($model, 'impactscore')->dropDownList(range(1, 100))->label(false); ?></td><td><?= $form->field($model, 'impactcomment')->textArea()->label(false) ?></td></tr>
                                                     
                                                     
                                                     <tr><td>Personal Development</td><td> <?= $form->field($model, 'personaldevelopmentscore')->dropDownList(range(1, 100))->label(false); ?></td><td><?= $form->field($model, 'personaldevelopmentcomment')->textArea()->label(false) ?></td></tr>
                                                        <tr><td>Relationships</td><td> <?= $form->field($model, 'relationshipsscore')->dropDownList(range(1, 100))->label(false); ?></td><td><?= $form->field($model, 'relationshipscomment')->textArea()->label(false) ?></td></tr>
    </table>

     <hr />
    <h3>How did you get on with last week's targets?</h3>
    <hr />



    <?= $form->field($model, 'previoustarget1')->textInput(['maxlength' => true])->input(['type' => 'input'], ['value' => 'Target was: '. $lastform->newtarget1. " || Report:"]); ?>

    <?= $form->field($model, 'previoustarget2')->textInput(['maxlength' => true])->input(['type' => 'input'], ['value' => 'Target was: '. $lastform->newtarget2. " || Report:"]); ?>

    <?= $form->field($model, 'previoustarget3')->textInput(['maxlength' => true])->input(['type' => 'input'], ['value' => 'Target was: '.  $lastform->newtarget3. " || Report:"]); ?>
    
         <hr />
    <h3>With the above in mind what would like to focus on this week?</h3>
    <hr />

    <?= $form->field($model, 'newtarget1')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'newtarget2')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'newtarget3')->textArea(['maxlength' => true]) ?>

     <hr />
    <h3>And finally . . . </h3>
    <hr />
    <?= $form->field($model, 'otherthoughts')->textArea(['maxlength' => true]) ?>
    
         <hr />
    <h3>Thanks - click create and see you next week!</h3>
    <hr />

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<div class="col-md-2"></div>
</div>
