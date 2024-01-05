<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string|null $image
 * @property int|null $status
 */
class Gallery extends \yii\db\ActiveRecord
{
    public $imageFile;

    public static function tableName()
    {
        return 'gallery';
    }


    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'status' => 'Status',
        ];
    }


    public function upload($imageName)
    {
        if ($this->validate()) {
            $uploadPath = 'uploads/BannerImage/';
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }
            $this->imageFile->saveAs($uploadPath . $imageName . '.' . $this->imageFile->extension);
            return true;
        }
        return false;
    }

}
