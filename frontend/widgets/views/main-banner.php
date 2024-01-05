<?php

use common\components\StaticFunctions;
use yii\helpers\Url;

foreach ($banners as $banner):
    $imagePath = StaticFunctions::getImage($banner, 'main-banner', 'image')
    ?>

    <!-- glavni-ekran -->
    <div class="glavni">
        <ul class="slideshow">
            <li><img src="<?= $imagePath ?>" alt="yo'q"></li>
            <li><img src="<?= $imagePath ?>" alt="yo'q"></li>
            <li><img src="<?= $imagePath ?>" alt="yo'q"></li>
            <li><img src="<?= $imagePath ?>" alt="yo'q"></li>
        </ul>
        <div class="bg-glavni"></div>
        <div class="my-container">
            <div class="glavni-in">
                <div class="sec-glavni">
                    <h1 class="txt-60 ab">
                        <?= $banner->title ?>
                    </h1>
                    <p class="txt-18 ab2">
                        <?= $banner->text ?>
                    </p>
                    <a href="<?= Url::to('site/works') ?>" class="btn-glavni   txt-18 ab3">
                        Все услуги
                    </a>
                </div>
                <a href="<?= Url::to('site/works') ?>" class="glavni-blog ab4">
                    <div class="bg-img">
                        <li><img src="<?= $imagePath ?>" alt="yo'q"></li>
                    </div>
                </a>
            </div>
        </div>
    </div>

<?php endforeach; ?>
