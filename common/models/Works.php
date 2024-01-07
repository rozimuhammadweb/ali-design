<?php

namespace common\models;

use mohorev\file\UploadImageBehavior;
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
    public function behaviors()
    {
        return [
            [
                'class' => UploadImageBehavior::class,
                'attribute' => 'image',
                'scenarios' => ['insert', 'update'],
                'placeholder' => '@app/modules/user/assets/images/userpic.jpg',
                'path' => '@webroot/frontend/uploads/user/{id}',
                'url' => '@web/frontend/uploads/user/{id}',
                'thumbs' => [
                    'thumb' => ['width' => 400, 'quality' => 90],
                    'preview' => ['width' => 200, 'height' => 200],
                    'news_thumb' => ['width' => 200, 'height' => 200, 'bg_color' => '000'],
                ],
            ],
        ];
    }

    public $image;

    public static function tableName()
    {
        return 'works';
    }


    public function rules()
    {
        return [
            ['image', 'image', 'extensions' => 'jpg, jpeg, png', 'on' => ['insert', 'update']],
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
