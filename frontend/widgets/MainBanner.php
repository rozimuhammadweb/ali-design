<?php


namespace frontend\widgets;


use yii\base\Widget;

class MainBanner extends Widget
{
    public function run()
    {
        return $this->render('main-banner');
   }
}