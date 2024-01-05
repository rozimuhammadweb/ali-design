<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\BannerCosts $model */

$this->title = 'Create Banner Costs';
$this->params['breadcrumbs'][] = ['label' => 'Banner Costs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-costs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
