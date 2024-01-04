<?php

/** @var \yii\web\View $this */

/** @var string $content */

use backend\assets\AppAsset;
use backend\widgets\Header;
use backend\widgets\LeftSide;
use backend\widgets\RightSide;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="skin-black">
    <?php $this->beginBody() ?>

    <?= Header::widget() ?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <?= LeftSide::widget() ?>
        <aside class="right-side container" >
            <?= $content ?>
        </aside>
    </div>


    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
