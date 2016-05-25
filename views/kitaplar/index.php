<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\ekitap\models\KitaplarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kitaplars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kitaplar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kitaplar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kitap_ismi',
            'aciklama',
            'fiyat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
