<?php


namespace frontend\widgets;


use yii\base\Widget;

class Contact extends Widget
{
    public function run()
    {
        return $this->render('contact');
    }
}