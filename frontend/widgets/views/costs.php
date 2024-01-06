<!-- //arenda-count -->
<?php

?>
<div class="purches ab  ">
    <div class="my-container">
        <div class="purches-in">
            <h1 class="txt-38">
                Аренда конструкции
            </h1>
            <p class="txt-18 sec-p">
                Мы вам показали примерную сумму основных услуг. Ценовая категория всех услуг может быть индивидуальной
                от требований клиента
            </p>
            <div class="purches-main">
                <?php use yii\helpers\Html;

                foreach ($costs as $bannerCost): ?>
                    <div class="card-p">
                        <p class="txt-23 top-p">
                            <?= Html::encode($bannerCost->name) ?>
                        </p>
                        <h1 class="txt-40 main-p">
                            <?= $bannerCost->cost ?> сум
                            <span class="txt-23"> кв.м</span>
                        </h1>
                        <p class="txt-18 btn-top">
                            <?= Html::encode($bannerCost->cost_for_kv) ?> гр/кв.м
                        </p>
                        <a class="btn-glavni txt-18 konsul">
                            Заказать услугу
                        </a>
                        <!-- Assuming you want to display the "Самоклеющася плёнка" section for each item -->

                        <p class="txt-16 bottom-p">
                            <span></span>
                            Самоклеющася плёнка:<strong><?= $bannerCost->cost_for_kv ?> сум/ кв.м</strong>
                        </p>
                        <p class="txt-16 bottom-p">
                            <span></span>
                            Самоклеющася плёнка:<strong><?= $bannerCost->cost_for_kv ?> сум/ кв.м</strong>
                        </p> <p class="txt-16 bottom-p">
                            <span></span>
                            Самоклеющася плёнка:<strong><?= $bannerCost->cost_for_kv ?> сум/ кв.м</strong>
                        </p> <p class="txt-16 bottom-p">
                            <span></span>
                            Самоклеющася плёнка:<strong><?= $bannerCost->cost_for_kv ?> сум/ кв.м</strong>
                        </p>

                    </div>
                <?php endforeach; ?>

<!--                <div class="card-p">-->
<!--                    <p class="txt-23 top-p">-->
<!--                        Печать на баннере-->
<!--                    </p>-->
<!--                    <h1 class="txt-40 main-p">-->
<!--                        2 225 000 сум <span class="txt-23">/ кв.м</span>-->
<!--                    </h1>-->
<!--                    <p class="txt-18 btn-top">-->
<!--                        360-380 гр/кв.м-->
<!--                    </p>-->
<!--                    <a class="btn-glavni txt-18 konsul">-->
<!--                        Заказать услугу-->
<!--                    </a>-->
<!--                    <p class="txt-16 bottom-p">-->
<!--                        <span></span>-->
<!--                        Самоклеющася плёнка: <strong> 40 000 сум/ кв.м</strong>-->
<!--                    </p>-->
<!--                    <p class="txt-16 bottom-p">-->
<!--                        <span></span>-->
<!--                        Самоклеющася плёнка: <strong> 40 000 сум/ кв.м</strong>-->
<!--                    </p>-->
<!--                    <p class="txt-16 bottom-p">-->
<!--                        <span></span>-->
<!--                        Самоклеющася плёнка: <strong> 40 000 сум/ кв.м</strong>-->
<!--                    </p>-->
<!--                    <p class="txt-16 bottom-p">-->
<!--                        <span></span>-->
<!--                        Самоклеющася плёнка: <strong> 40 000 сум/ кв.м</strong>-->
<!--                    </p>-->
<!--                </div>-->
<!--                <div class="card-p card-p-main">-->
<!--                    <span class="top-top txt-14">Для хорошего продвиждение</span>-->
<!--                    <p class="txt-23 top-p">-->
<!--                        Печать на баннере-->
<!--                    </p>-->
<!--                    <h1 class="txt-40 main-p">-->
<!--                        2 225 000 сум <span class="txt-23">/ кв.м</span>-->
<!--                    </h1>-->
<!--                    <p class="txt-18 btn-top">-->
<!--                        360-380 гр/кв.м-->
<!--                    </p>-->
<!--                    <a class="btn-glavni txt-18 konsul">-->
<!--                        Заказать услугу-->
<!--                    </a>-->
<!--                    <p class="txt-16 bottom-p">-->
<!--                        <span></span>-->
<!--                        Самоклеющася плёнка: <strong> 40 000 сум/ кв.м</strong>-->
<!--                    </p>-->
<!--                    <p class="txt-16 bottom-p">-->
<!--                        <span></span>-->
<!--                        Самоклеющася плёнка: <strong> 40 000 сум/ кв.м</strong>-->
<!--                    </p>-->
<!--                    <p class="txt-16 bottom-p">-->
<!--                        <span></span>-->
<!--                        Самоклеющася плёнка: <strong> 40 000 сум/ кв.м</strong>-->
<!--                    </p>-->
<!--                    <p class="txt-16 bottom-p">-->
<!--                        <span></span>-->
<!--                        Самоклеющася плёнка: <strong> 40 000 сум/ кв.м</strong>-->
<!--                    </p>-->
<!--                </div>-->
<!--                <div class="card-p">-->
<!--                    <p class="txt-23 top-p">-->
<!--                        Печать на баннере-->
<!--                    </p>-->
<!--                    <h1 class="txt-40 main-p">-->
<!--                        2 225 000 сум <span class="txt-23">/ кв.м</span>-->
<!--                    </h1>-->
<!--                    <p class="txt-18 btn-top">-->
<!--                        360-380 гр/кв.м-->
<!--                    </p>-->
<!--                    <a class="btn-glavni txt-18 konsul">-->
<!--                        Заказать услугу-->
<!--                    </a>-->
<!--                    <p class="txt-16 bottom-p">-->
<!--                        <span></span>-->
<!--                        Самоклеющася плёнка: <strong> 40 000 сум/ кв.м</strong>-->
<!--                    </p>-->
<!--                    <p class="txt-16 bottom-p">-->
<!--                        <span></span>-->
<!--                        Самоклеющася плёнка: <strong> 40 000 сум/ кв.м</strong>-->
<!--                    </p>-->
<!--                    <p class="txt-16 bottom-p">-->
<!--                        <span></span>-->
<!--                        Самоклеющася плёнка: <strong> 40 000 сум/ кв.м</strong>-->
<!--                    </p>-->
<!--                    <p class="txt-16 bottom-p">-->
<!--                        <span></span>-->
<!--                        Самоклеющася плёнка: <strong> 40 000 сум/ кв.м</strong>-->
<!--                    </p>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</div>
