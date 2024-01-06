<!-- //slider-page -->
<div class="slider-page ab ">
    <div class="my-container">
        <div class="slider-page-in">
            <div class="top">
                <h1 class="txt-38">
                    Наши услуги
                </h1>
                <div class="buttons">
                    <button class="btn-slider btn-prew1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M14.7204 6.3006C15.0932 6.7014 15.0932 7.35123 14.7204 7.75203L10.3045 12.5L14.7204 17.248C15.0932 17.6489 15.0932 18.2986 14.7204 18.6994C14.3476 19.1002 13.7433 19.1002 13.3706 18.6994L8.27958 13.2257C7.90681 12.8249 7.90681 12.1752 8.27958 11.7743L13.3706 6.3006C13.7433 5.8998 14.3476 5.8998 14.7204 6.3006Z"
                                  fill="white"/>
                        </svg>
                    </button>
                    <button class="btn-slider btn-next1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M9.27959 6.3006C8.9068 6.7014 8.9068 7.35123 9.27959 7.75203L13.6955 12.5L9.27959 17.248C8.9068 17.6489 8.9068 18.2986 9.27959 18.6994C9.65237 19.1002 10.2567 19.1002 10.6294 18.6994L15.7204 13.2257C16.0932 12.8249 16.0932 12.1752 15.7204 11.7743L10.6294 6.3006C10.2567 5.8998 9.65237 5.8998 9.27959 6.3006Z"
                                  fill="white"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="swiper slider-first my-swww">
                <div class="swiper-wrapper">
                    <?php use common\components\StaticFunctions;
                    use yii\helpers\Url;
                    foreach ($services as $service): ?>
                        <a href="<?= Url::to(['more-info']) ?>" class="swiper-slide card-s">
                            <div class="top">
                                <div class="top-in">
                                    <?php
                                    $image = StaticFunctions::getImage($service, 'post', 'image');
                                    ?>
                                    <img src="<?= $image ?>" alt="img">
                                </div>
                            </div>
                            <p class="bottom txt-28">
                                <?= $service->name ?>
                            </p>
                        </a>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- //slider-bottom -->

<div class="slider-bottom ab ">
    <div class="my-container">
        <div class="slider-bottom-in">
            <div class="left">
                <img src="img/png/man.png" alt="" class="left-img">
            </div>
            <div class="right">
                <div class="right-top">
                    <h1 class="txt-38">
                        Почему именно мы?
                    </h1>
                    <p class="txt-16">
                        Реклама — это не просто, но мы всегда помогаем решить реальные задачи наших клиентов в реальном
                        времени!
                    </p>
                </div>
                <div class="bottom-cards">
                    <div class="card-r">
                        <div class="top">
                            <img src="img/png/an1.png" alt="">
                        </div>
                        <p class="txt-20">
                            Высокое качество
                        </p>
                    </div>
                    <div class="card-r">
                        <div class="top">
                            <img src="img/png/an3.png" alt="">
                        </div>
                        <p class="txt-20">
                            Высокое качество
                        </p>
                    </div>
                    <div class="card-r">
                        <div class="top">
                            <img src="img/png/an3.png" alt="">
                        </div>
                        <p class="txt-20">
                            Высокое качество
                        </p>
                    </div>

                    <div class="card-r">
                        <div class="top">
                            <img src="img/png/an4.png" alt="">
                        </div>
                        <p class="txt-20">
                            Высокое качество
                        </p>
                    </div>
                    <div class="card-r">
                        <div class="top">
                            <img src="img/png/an5.png" alt="">
                        </div>
                        <p class="txt-20">
                            Высокое качество
                        </p>
                    </div>
                    <div class="card-r">
                        <div class="top">
                            <img src="img/png/an6.png" alt="">
                        </div>
                        <p class="txt-20">
                            Высокое качество
                        </p>
                    </div>
                    <div class="card-r">
                        <div class="top">
                            <img src="img/png/an7.png" alt="">
                        </div>
                        <p class="txt-20">
                            Высокое качество
                        </p>
                    </div>
                    <div class="card-r">
                        <div class="top">
                            <img src="img/png/an8.png" alt="">
                        </div>
                        <p class="txt-20">
                            Высокое качество
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
