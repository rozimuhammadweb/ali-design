<?php


namespace backend\widgets;


use yii\base\Widget;

class LeftSide extends Widget
{
    public function run()
    {
        return $this->render('left-side');
    }
}