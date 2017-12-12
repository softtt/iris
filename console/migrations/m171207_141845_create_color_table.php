<?php

use yii\db\Migration;

/**
 * Handles the creation of table `color`.
 */
class m171207_141845_create_color_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('color', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('color');
    }
}
