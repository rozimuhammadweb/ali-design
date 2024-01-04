<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%works}}`.
 */
class m240104_053436_create_works_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%works}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'image' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%works}}');
    }
}
