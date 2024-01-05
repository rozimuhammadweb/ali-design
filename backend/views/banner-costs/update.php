<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\BannerCosts $model */

$this->title = 'Update Banner Costs: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Banner Costs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="banner-costs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
