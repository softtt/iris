<?php

use yii\db\Migration;

/**
 * Class m171206_064406_add_category_to_product_table
 */
class m171206_064406_add_category_to_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('product', 'category_id', \yii\db\Schema::TYPE_INTEGER);
        $this->createIndex('index-product-category_id','product','category_id');
        $this->addForeignKey('foreign-key-category_id','product', 'category_id','category','id','CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171206_064406_add_category_to_product_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171206_064406_add_category_to_product_table cannot be reverted.\n";

        return false;
    }
    */
}
