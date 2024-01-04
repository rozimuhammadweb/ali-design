<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%banner_costs}}`.
 */
class m240104_051811_create_banner_costs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%banner_costs}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'cost' => $this->integer(),
            'cost_for_kv' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%banner_costs}}');
    }
}
