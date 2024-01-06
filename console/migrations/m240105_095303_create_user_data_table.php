<?php

use yii\db\Expression;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_data}}`.
 */
class m240105_095303_create_user_data_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_data}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'number' => $this->string(),
            'comment' => $this->text()->defaultValue(null),
            'created_at' => $this->timestamp()->defaultValue(new Expression('CURRENT_TIMESTAMP'))
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_data}}');
    }
}
