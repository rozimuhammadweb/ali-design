<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Services $model */

$this->title = 'Update services: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'services', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="services-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
