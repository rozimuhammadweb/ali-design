<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>

<div class="works-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="col-xs-3">
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-3">
        <?= $form->field($model, 'image')->fileInput() ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success mt-5']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
