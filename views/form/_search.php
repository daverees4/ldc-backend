<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'author') ?>

    <?= $form->field($model, 'whygrateful') ?>

    <?= $form->field($model, 'threethingshappy1') ?>

    <?= $form->field($model, 'threethingshappy2') ?>

    <?php // echo $form->field($model, 'threethingshappy3') ?>

    <?php // echo $form->field($model, 'threethingsunhappy1') ?>

    <?php // echo $form->field($model, 'threethingsunhappy2') ?>

    <?php // echo $form->field($model, 'threethingsunhappy3') ?>

    <?php // echo $form->field($model, 'threeimprovements1') ?>

    <?php // echo $form->field($model, 'threeimprovements2') ?>

    <?php // echo $form->field($model, 'threeimprovements3') ?>

    <?php // echo $form->field($model, 'healthscore') ?>

    <?php // echo $form->field($model, 'healthcomment') ?>

    <?php // echo $form->field($model, 'financesscore') ?>

    <?php // echo $form->field($model, 'financescomment') ?>

    <?php // echo $form->field($model, 'workyouscore') ?>

    <?php // echo $form->field($model, 'workyoucomment') ?>

    <?php // echo $form->field($model, 'workothersscore') ?>

    <?php // echo $form->field($model, 'workotherscomment') ?>

    <?php // echo $form->field($model, 'experiencescore') ?>

    <?php // echo $form->field($model, 'experiencecomment') ?>

    <?php // echo $form->field($model, 'impactscore') ?>

    <?php // echo $form->field($model, 'impactcomment') ?>

    <?php // echo $form->field($model, 'personaldevelopmentscore') ?>

    <?php // echo $form->field($model, 'personaldevelopmentcomment') ?>

    <?php // echo $form->field($model, 'relationshipsscore') ?>

    <?php // echo $form->field($model, 'relationshipscomment') ?>

    <?php // echo $form->field($model, 'previoustarget1') ?>

    <?php // echo $form->field($model, 'previoustarget2') ?>

    <?php // echo $form->field($model, 'previoustarget3') ?>

    <?php // echo $form->field($model, 'newtarget1') ?>

    <?php // echo $form->field($model, 'newtarget2') ?>

    <?php // echo $form->field($model, 'newtarget3') ?>

    <?php // echo $form->field($model, 'otherthoughts') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
