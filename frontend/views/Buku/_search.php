<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\BukuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="buku-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
<div class="row g-3 align-items-center">
  <div class="col-auto">
         <?= $form->field($model, 'nama') ?>
  </div>
    <div class="col-auto">
          <?= $form->field($model, 'instansi') ?>
    </div>
     <div class="col-auto">
          <?= $form->field($model, 'tujuan') ?>
  </div>
    <div class="col-auto">
           <?= $form->field($model, 'keperluan') ?>
    </div>
    <div class="col-auto">
           <?php  echo $form->field($model, 'tanggal') ?>
    </div>
</div>
   

   

    

   

   

    

    <div class="col-auto">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
      
    </div>

    <?php ActiveForm::end(); ?>

</div>
