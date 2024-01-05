<?php

namespace frontend\widgets;

use yii\base\Widget;
use common\models\Contact;

class Header extends Widget
{

    public function run()
    {
        $contacts = Contact::find()->all();
        return $this->render('header', ['contacts' => $contacts]);
    }

}