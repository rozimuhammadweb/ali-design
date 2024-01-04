<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%main_banner}}`.
 */
class m240103_044320_create_main_banner_table extends Migration
{

    public function safeUp()
    {
        $this->createTable('{{%main_banner}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string('25'),
            'text' => $this->string('100'),
            'image' =>$this->text(),
        ]);
    }


    public function safeDown()
    {
        $this->dropTable('{{%main_banner}}');
    }
}
