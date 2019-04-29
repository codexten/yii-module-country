<?php

namespace codexten\yii\modules\country\migrations;

use yii\db\Migration;

/**
 * Handles the creation of table `{{%country}}`.
 */
class M190429114044Create_country_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%country}}', [
            'id' => $this->primaryKey(),
            'code' => $this->string(50),
            'is_enabled' => $this->boolean
(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%country}}');
    }
}
