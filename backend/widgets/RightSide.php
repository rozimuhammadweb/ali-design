<?php


namespace backend\widgets;


use yii\base\Widget;

class RightSide extends Widget
{
    public function run()
    {
        return $this->render('right-side');
    }
}