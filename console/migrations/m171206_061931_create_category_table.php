<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m171206_061931_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'parent' => $this->boolean()->defaultValue(true),
            'description' => $this->text(),
            'title' => $this->string(),
            'cover' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
