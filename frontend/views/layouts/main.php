<?php


use common\widgets\Alert;
use frontend\assets\AppAsset;
use frontend\widgets\Footer;
use frontend\widgets\Header;
use frontend\widgets\Modals;
use yii\bootstrap5\Html;

/** @var TYPE_NAME $content */

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
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <?= Modals::widget() ?>
    <?= Header::widget() ?>

    <main role="main" class="flex-shrink-0">
        <?= Alert::widget() ?>
        <?= $content ?>

    </main>

    <?= Footer::widget() ?>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
