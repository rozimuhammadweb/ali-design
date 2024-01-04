<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "banner_costs".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $cost
 * @property string|null $cost_for_kv
 */
class BannerCosts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banner_costs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cost'], 'integer'],
            [['name', 'cost_for_kv'], 'string', 'max' => 255],
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
            'cost' => 'Cost',
            'cost_for_kv' => 'Cost For Kv',
        ];
    }
}
