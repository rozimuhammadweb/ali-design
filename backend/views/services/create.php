<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Services $model */

$this->title = 'Create services';
$this->params['breadcrumbs'][] = ['label' => 'services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
