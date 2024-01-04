<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "main_banner".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $text
 * @property string|null $image
 */
class MainBanner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'main_banner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image'], 'string'],
            [['title'], 'string', 'max' => 25],
            [['text'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'image' => 'Image',
        ];
    }
}
