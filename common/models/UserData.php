<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_data".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $number
 * @property string|null $comment
 * @property string|null $created_at
 */
class UserData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['comment'], 'string'],
            [['created_at'], 'safe'],
            [['name', 'number'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'number' => 'Number',
            'comment' => 'Comment',
            'created_at' => 'Created At',
        ];
    }
}
