<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\MainBanner $model */

$this->title = 'Create Main Banner';
$this->params['breadcrumbs'][] = ['label' => 'Main Banners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-banner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
