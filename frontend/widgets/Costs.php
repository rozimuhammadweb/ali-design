<?php


namespace frontend\widgets;


use common\models\BannerCosts;
use yii\base\Widget;

class Costs extends Widget
{
    public function run()
    {
        $costs = BannerCosts::find()->all();
        return $this->render('costs', ['costs' => $costs]);
    }
}