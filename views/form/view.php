<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Form */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'author',
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

</div>
