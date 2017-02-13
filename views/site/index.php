<?php
  
  use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">


    <div class="body-content">
      
      
             <div class="row">
            <div class="col-lg-12">
                <h2>View Past Forms</h2>

                <p> <?= Html::a('View Forms', ['form/index'], ['class' => 'btn btn-success']) ?></p>
                
               

            </div>
   
        </div>

    </div>

        <div class="row">
            <div class="col-lg-4">
                <h2>David</h2>

                <p> <?= Html::a('Create Form', ['form/create', 'userId' => 1], ['class' => 'btn btn-success']) ?></p>
                
               

            </div>
            <div class="col-lg-4">
                <h2>Emma</h2>

              <p> <?= Html::a('Create Form', ['form/create', 'userId' => 2], ['class' => 'btn btn-success']) ?></p>
            </div>
            <div class="col-lg-4">
                <h2>Nick</h2>
                <p> <?= Html::a('Create Form', ['form/create', 'userId' => 3], ['class' => 'btn btn-success']) ?></p>
                

            </div>
        </div>

    </div>
</div>
