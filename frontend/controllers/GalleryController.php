<?php


namespace frontend\controllers;


use common\models\Gallery;
use yii\web\Controller;

class GalleryController extends Controller
{
    public function actionIndex()
    {
        $model = Gallery();
    }
}