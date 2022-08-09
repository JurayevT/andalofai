<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%darsJadvali}}`.
 */
class m211221_030122_create_darsJadvali_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%darsJadvali}}', [
            'id' => $this->primaryKey(),

            'dushanba1' => $this->string(40)->notNull(),
            'dushanba2' => $this->string(40)->notNull(),
            'dushanba3' => $this->string(40)->notNull(),
            'dushanba4' => $this->string(40)->notNull(),
            
            'seshanba1' => $this->string(40)->notNull(),
            'seshanba2' => $this->string(40)->notNull(),
            'seshanba3' => $this->string(40)->notNull(),
            'seshanba4' => $this->string(40)->notNull(),

            'chorshanba1' => $this->string(40)->notNull(),
            'chorshanba2' => $this->string(40)->notNull(),
            'chorshanba3' => $this->string(40)->notNull(),
            'chorshanba4' => $this->string(40)->notNull(),

            'payshanba1' => $this->string(40)->notNull(),
            'payshanba2' => $this->string(40)->notNull(),
            'payshanba3' => $this->string(40)->notNull(),
            'payshanba4' => $this->string(40)->notNull(),

            'juma1' => $this->string(40)->notNull(),
            'juma2' => $this->string(40)->notNull(),
            'juma3' => $this->string(40)->notNull(),
            'juma4' => $this->string(40)->notNull(),

            'shanba1' => $this->string(40)->notNull(),
            'shanba2' => $this->string(40)->notNull(),
            'shanba3' => $this->string(40)->notNull(),
            'shanba4' => $this->string(40)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%darsJadvali}}');
    }
}
