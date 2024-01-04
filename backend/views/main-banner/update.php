<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\MainBanner $model */

$this->title = 'Update Main Banner: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Main Banners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="main-banner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
