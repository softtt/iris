<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_to_color`.
 */
class m171207_142041_create_product_to_color_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product_to_color', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product_to_color');
    }
}
