<?php


namespace frontend\widgets;

use common\models\Services;
use yii\base\Widget;

class SliderServices extends Widget
{
    public function run()
    {
        $services = Services::find()->all();
        return $this->render('slider-services', ['services' => $services]);
    }
}
