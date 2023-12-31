<?php


namespace frontend\widgets;


use yii\base\Widget;

class Modals extends Widget
{
    public function run()
    {
        return $this->render('modals');
    }
}