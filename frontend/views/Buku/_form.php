<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Buku */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="buku-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instansi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tujuan')->dropDownList([ 'T. Pengelasan' => 'T. Pengelasan', 'T. Desain Pemodelan dan Informasi Bangunan' => 'T. Desain Pemodelan dan Informasi Bangunan', 'T. Bisnis Properti dan Konstruksi' => 'T. Bisnis Properti dan Konstruksi', 'Tehnik dan Bisnis Sepeda Motor' => 'Tehnik dan Bisnis Sepeda Motor', 'Rekayasa Perangkat Lunak' => 'Rekayasa Perangkat Lunak','Elektronika Industri'=>'Elektronika Industri', 'Otomasi Industri'=>'Otomasi Industri', 'Tehnik Pendingin dan Tata Udara'=>'Tehnik Pendingin dan Tata Udara','Wakasek'=>'Wakasek','Kepsek'=>'Kepsek' ], ['prompt' => 'pilih']) ?> 

    <?= $form->field($model, 'keperluan')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'tanggal')->textInput(['type' => 'date']) ?>
 -->
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
