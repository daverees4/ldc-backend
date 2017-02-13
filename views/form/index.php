<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Form;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FormSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Forms';
$this->params['breadcrumbs'][] = $this->title;
$davidforms=Form::find()
    ->where(['author' => '1'])
    ->orderBy(['created'=>SORT_DESC])
    ->all();
    
    $emmaforms=Form::find()
    ->where(['author' => '2'])
    ->orderBy(['created'=>SORT_DESC])
    ->all();
    
    $nickforms=Form::find()
    ->where(['author' => '3'])
    ->orderBy(['created'=>SORT_DESC])
    ->all();

?>
<div class="form-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <h2>David's Forms</h2>
      <p> <?= Html::a('Create Form for David', ['form/create', 'userId' => 1], ['class' => 'btn btn-success']) ?></p>
      
      <table border="1" cellpadding="10">
        <tr><td>Created</td><td>Actions</td></tr>
        <? foreach ($davidforms as $davidform): ?>
        <tr><td><?=$davidform->created;?></td><td><?= Html::a('Edit', ['form/update', 'id' => $davidform->id], ['class' => 'btn btn-success']) ?></td></tr>
        <? endforeach;?>
      </table>
      
        <h2>Emma's Forms</h2>
      <p> <?= Html::a('Create Form for Emma', ['form/create', 'userId' => 2], ['class' => 'btn btn-success']) ?></p>
            <table border="1" cellpadding="15px">
        <tr><td>Created</td><td>Actions</td></tr>
        <? foreach ($emmaforms as $emmaform): ?>
        <tr><td><?=$emmaform->created;?></td><td><?= Html::a('Edit', ['form/update', 'id' => $emmaform->id], ['class' => 'btn btn-success']) ?></td></tr>
        <? endforeach;?>
      </table>
      
        <h2>Nick's Forms</h2>
      <p> <?= Html::a('Create Form for Nick', ['form/create', 'userId' => 3], ['class' => 'btn btn-success']) ?></p>
            <table border="1" cellpadding="15px">
        <tr><td>Created</td><td>Actions</td></tr>
        <? foreach ($nickforms as $nickform): ?>
        <tr><td><?=$nickform->created;?></td><td><?= Html::a('Edit', ['form/update', 'id' => $nickform->id], ['class' => 'btn btn-success']) ?></td></tr>
        <? endforeach;?>
      </table>
    


</div>
