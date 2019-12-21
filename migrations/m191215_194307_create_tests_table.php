<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tests}}`.
 */
class m191215_194307_create_tests_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('{{%tests}}', [
            'id' => $this->primaryKey(),
            'test' => $this->string(),
            'created_at' => $this->dateTime()->defaultValue(['expression'=>'CURRENT_TIMESTAMP']),
            'updated_at' => $this->dateTime()->defaultValue(['expression'=>'CURRENT_TIMESTAMP']),
            'status' => $this->integer()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('{{%tests}}');
    }
}
