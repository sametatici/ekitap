<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\ekitap\models\Kitaplar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kitaplar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kitap_ismi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aciklama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fiyat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
