<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_product_property`.
 * Has foreign keys to the tables:
 *
 * - `product`
 * - `product_property`
 */
class m180124_102807_create_junction_table_for_product_and_product_property_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product_product_property', [
            'product_id' => $this->integer(),
            'product_property_id' => $this->integer(),
            'PRIMARY KEY(product_id, product_property_id)',
        ]);

        // creates index for column `product_id`
        $this->createIndex(
            'idx-product_product_property-product_id',
            'product_product_property',
            'product_id'
        );

        // add foreign key for table `product`
        $this->addForeignKey(
            'fk-product_product_property-product_id',
            'product_product_property',
            'product_id',
            'product',
            'id',
            'CASCADE'
        );

        // creates index for column `product_property_id`
        $this->createIndex(
            'idx-product_product_property-product_property_id',
            'product_product_property',
            'product_property_id'
        );

        // add foreign key for table `product_property`
        $this->addForeignKey(
            'fk-product_product_property-product_property_id',
            'product_product_property',
            'product_property_id',
            'product_property',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `product`
        $this->dropForeignKey(
            'fk-product_product_property-product_id',
            'product_product_property'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            'idx-product_product_property-product_id',
            'product_product_property'
        );

        // drops foreign key for table `product_property`
        $this->dropForeignKey(
            'fk-product_product_property-product_property_id',
            'product_product_property'
        );

        // drops index for column `product_property_id`
        $this->dropIndex(
            'idx-product_product_property-product_property_id',
            'product_product_property'
        );

        $this->dropTable('product_product_property');
    }
}
