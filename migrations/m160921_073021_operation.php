<?php

use yii\db\Migration;

class m160921_073021_operation extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;

        // Tables Operations
        $this->createTable('{{%operation}}', [
            'id' => $this->primaryKey(),
            'type_id' => $this->integer()->notNull(),
            'status_id' => $this->integer()->notNull(),
            'actor_id' => $this->integer()->null(),
            'time' => $this->timestamp()->notNull(),
            'jdat' => 'JSONB NULL',
        ], $tableOptions);

        $this->createIndex('idx_operation_actor_id', '{{%operation}}', 'actor_id');
    }

    public function safeDown()
    {
        $this->dropIndex('idx_operation_actor_id', '{{%operation}}');
        $this->dropTable('{{%operation}}');
    }

}
