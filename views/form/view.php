<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Form */

$this->title = "Form submitted at ". $model->created;
$this->params['breadcrumbs'][] = ['label' => 'Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-view">



 
    
<!--
    <?=DetailView::widget([
        'model' => $model,
        'attributes' => [
            'whygrateful',
            'threethingshappy1',
            'threethingshappy2',
            'threethingshappy3',
            'threethingsunhappy1',
            'threethingsunhappy2',
            'threethingsunhappy3',
            'threeimprovements1',
            'threeimprovements2',
            'threeimprovements3',
            'healthscore',
            'healthcomment',
            'financesscore',
            'financescomment',
            'workyouscore',
            'workyoucomment',
            'workothersscore',
            'workotherscomment',
            'experiencescore',
            'experiencecomment',
            'impactscore',
            'impactcomment',
            'personaldevelopmentscore',
            'personaldevelopmentcomment',
            'relationshipsscore',
            'relationshipscomment',
            'previoustarget1',
            'previoustarget2',
            'previoustarget3',
            'newtarget1',
            'newtarget2',
            'newtarget3',
            'otherthoughts',
        ],
    ]) ?>
    -->
    
    <div class="row">
<div class="col-md-2"></div>
<div class="form-form col-md-8">
      <h1><?= Html::encode($this->title) ?></h1>
     <p>
        <?= Html::a('Back to Forms', ['form/index'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <hr />
    
      <h3>To get started, let's write something you're grateful for!</h3>
   <hr />





   <p><?=$model->whygrateful;?></p>
    <hr />
    <h3>Please write three things you're happy about from the past week.</h3>
    <hr />

    <p> 1. <?=$model->threethingshappy1;?></p>

    <p> 2. <?=$model->threethingshappy2;?></p>
    
    <p> 3. <?=$model->threethingshappy3;?></p>

       <hr />
    <h3>Now three things you're less happy about from the last week</h3>
    <hr />

    <p> 1. <?=$model->threethingsunhappy1;?></p>

    <p> 2. <?=$model->threethingsunhappy2;?></p>
    
    <p> 3. <?=$model->threethingsunhappy3;?></p>
    <hr />
    <h3>What could you do to change these things in future?</h3>
    <hr />

    <p> 1. <?=$model->threeimprovements1;?></p>

    <p> 2. <?=$model->threeimprovements2;?></p>
    
    <p> 3. <?=$model->threeimprovements3;?></p>
         <hr />
    <h3>Complete the table indicating your score for different areas of life and any comments</h3>
    <hr />
    
    <table style="width: 100%" class="table">
      <tr><td>Area</td><td>Score (0-100)</td><td>Comments</td></tr>     
      <tr><td>Health</td><td> <?=$model->healthscore;?></td><td><?=$model->healthcomment;?></td></tr>
      <tr><td>Finances</td><td> <?=$model->financesscore;?></td><td><?=$model->financescomment;?></td></tr>
      <tr><td>Work (you)</td><td> <?=$model->workyouscore;?></td><td><?=$model->workyoucomment;?></td></tr>
      <tr><td>Work (others)</td><td> <?=$model->workothersscore;?></td><td><?=$model->workotherscomment;?></td></tr>
      <tr><td>Experience</td><td> <?=$model->experiencescore;?></td><td><?=$model->experiencecomment;?></td></tr>
      <tr><td>Impact Score</td><td> <?=$model->impactscore;?></td><td><?=$model->impactcomment;?></td></tr>
      <tr><td>Personal Development</td><td> <?=$model->personaldevelopmentscore;?></td><td><?=$model->personaldevelopmentcomment;?></td></tr>
      <tr><td>Relationships Score</td><td> <?=$model->relationshipsscore;?></td><td><?=$model->relationshipscomment;?></td></tr>
    </table>

     <hr />
    <h3>How did you get on with last week's targets?</h3>
    <hr />
    
    <p> 1. <?=$model->previoustarget1;?></p>
    <p> 2. <?=$model->previoustarget2;?></p>
    <p> 3. <?=$model->previoustarget3;?></p>

         <hr />
    <h3>With the above in mind what would like to focus on this week?</h3>
    <hr />

    <p> 1. <?=$model->newtarget1;?></p>
    <p> 2. <?=$model->newtarget2;?></p>
    <p> 3. <?=$model->newtarget3;?></p>

     <hr />
    <h3>And finally . . . </h3>
    <hr />
    <p><?=$model->otherthoughts;?></p>
    
         <hr />
    <h3>Thanks - click create and see you next week!</h3>
    <hr />

</div>


<div class="col-md-2"></div>
    </div>
    
