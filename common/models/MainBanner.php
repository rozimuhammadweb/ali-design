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

    public $imageFile;

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
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
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

    public function upload($imageName)
    {
        if ($this->validate()) {
            $uploadPath = 'uploads/main-banner/';
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }
            $this->imageFile->saveAs($uploadPath . $imageName . '.' . $this->imageFile->extension);
            return true;
        }
        return false;
    }

}
