<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\ekitap\models\Kitaplar */

$this->title = 'Create Kitaplar';
$this->params['breadcrumbs'][] = ['label' => 'Kitaplars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kitaplar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
