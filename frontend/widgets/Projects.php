<?php


namespace frontend\widgets;


use yii\base\Widget;

class Projects extends Widget
{
    public function run()
    {
        return $this->render('projects');
    }
}