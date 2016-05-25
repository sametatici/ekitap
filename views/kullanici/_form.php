<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\ekitap\models\Kullanici */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kullanici-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kullanici_adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sifre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kullanici_tipi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
