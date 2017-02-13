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

<div class="form-form">

    <?php $form = ActiveForm::begin(); ?>

     <?php echo $form->field($model,'author')->hiddenInput(['value'=>$_GET['userId']])->label(false); ?>

    <?= $form->field($model, 'whygrateful')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'threethingshappy1')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'threethingshappy2')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'threethingshappy3')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'threethingsunhappy1')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'threethingsunhappy2')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'threethingsunhappy3')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'threeimprovements1')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'threeimprovements2')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'threeimprovements3')->textArea(['maxlength' => true]) ?>
    
    <table style="width: 100%">
            <tr><td>Area</td><td>Score (0-100)</td><td>Comments</td></tr>
          
      <tr><td>Health</td><td> <?= $form->field($model, 'healthscore')->textInput()->label(false); ?></td><td><?= $form->field($model, 'healthscore')->textArea()->label(false) ?></td></tr>
           <tr><td>Finances</td><td> <?= $form->field($model, 'financesscore')->textInput()->label(false); ?></td><td><?= $form->field($model, 'financesscore')->textArea()->label(false) ?></td></tr>
                      <tr><td>Work (you)</td><td> <?= $form->field($model, 'workyouscore')->textInput()->label(false); ?></td><td><?= $form->field($model, 'workyouscore')->textArea()->label(false) ?></td></tr>
                      
                                       <tr><td>Work (others)</td><td> <?= $form->field($model, 'workothersscore')->textInput()->label(false); ?></td><td><?= $form->field($model, 'workothersscore')->textArea()->label(false) ?></td></tr>
                                       
                                             <tr><td>Experience</td><td> <?= $form->field($model, 'experiencescore')->textInput()->label(false); ?></td><td><?= $form->field($model, 'experiencescore')->textArea()->label(false) ?></td></tr>
                                             
                                                     <tr><td>Impact</td><td> <?= $form->field($model, 'impactscore')->textInput()->label(false); ?></td><td><?= $form->field($model, 'impactscore')->textArea()->label(false) ?></td></tr>
                                                     
                                                     
                                                     <tr><td>Personal Development</td><td> <?= $form->field($model, 'personaldevelopmentscore')->textInput()->label(false); ?></td><td><?= $form->field($model, 'personaldevelopmentscore')->textArea()->label(false) ?></td></tr>
                                                        <tr><td>Relationships</td><td> <?= $form->field($model, 'relationshipsscore')->textInput()->label(false); ?></td><td><?= $form->field($model, 'relationshipsscore')->textArea()->label(false) ?></td></tr>
    </table>





    <?= $form->field($model, 'previoustarget1')->textInput(['maxlength' => true])->input(['type' => 'input'], ['placeholder' => $lastform->previoustarget1]); ?>

    <?= $form->field($model, 'previoustarget2')->textInput(['maxlength' => true])->input(['type' => 'input'], ['placeholder' => $lastform->previoustarget2]); ?>

    <?= $form->field($model, 'previoustarget3')->textInput(['maxlength' => true])->input(['type' => 'input'], ['placeholder' => $lastform->previoustarget3]); ?>

    <?= $form->field($model, 'newtarget1')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'newtarget2')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'newtarget3')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'otherthoughts')->textArea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
