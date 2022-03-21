<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BukuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Buku Tamu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-index">

    <h1>Data Tamu</h1>

    <p>
        <?= Html::a('Create Buku', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'tableOptions' => [
        'class' => 'table table-striped',
            ],
        'options' => [
        'class' => 'table-responsive',
            ],
        'dataProvider' => $dataProvider,
       
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nama',
            'instansi',
            'tujuan',
            'keperluan',
            'tanggal',
           
        ],
    ]); ?>


</div>
