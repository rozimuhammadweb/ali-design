<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Contact $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="contact-form">
    <?php $form = ActiveForm::begin(); ?>

    <div class="col-xs-4">
        <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-4">
        <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-4">
        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success ']) ?>
    </div>
</div>

