<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\eKitap\models\KullaniciSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kullanicis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kullanici-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kullanici', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kullanici_adi',
            'sifre',
            'kullanici_tipi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
