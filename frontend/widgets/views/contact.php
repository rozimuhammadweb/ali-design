<!-- //contact -->
<?php

use common\models\UserData;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$model = new UserData();
?>
<div class="contact ab ">
    <div class="my-container">
        <div class="contact-in">
            <h1 class="txt-28 top">Получить консультацию</h1>

            <?php

            $form = ActiveForm::begin(['action' => ['consultation'], 'options' => ['class' => 'form-content']]); ?>

            <?= $form->field($model, 'name')->textInput(['placeholder' => 'Ваше имя', 'class' => 'input txt-16', 'style' => 'width: 350px;'])->label(false) ?>
            <?= $form->field($model, 'number')->textInput(['placeholder' => '+998', 'class' => 'input txt-16', 'style' => 'width: 350px; '])->label(false) ?>


            <button type="submit" class="btn-glavni txt-18 sucs">Отправить</button>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
