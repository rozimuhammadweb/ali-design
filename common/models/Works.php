<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "works".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $image
 */
class Works extends \yii\db\ActiveRecord
{
    public $image;

    public static function tableName()
    {
        return 'works';
    }


    public function rules()
    {
        return [
            [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['title'], 'string', 'max' => 255],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'image' => 'Image',
        ];
    }
}
