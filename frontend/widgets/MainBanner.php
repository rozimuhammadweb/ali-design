<?php


namespace frontend\widgets;


use yii\base\Widget;

class MainBanner extends Widget
{
    public function run()
    {
        $banners = \common\models\MainBanner::find()->all();
        return $this->render('main-banner', ['banners' => $banners]);
    }
}