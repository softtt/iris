<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_property`.
 */
class m180124_074436_create_product_property_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product_property_type', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)

        ]);

        $this->createTable('product_property', [
            'id' => $this->primaryKey(),
            'type' => $this->integer(),
            'prop_value' => $this->string(255),


        ]);

        $this->createIndex('index-property-type_id','product_property','type');
        $this->addForeignKey('foreign-key-type_id','product_property', 'type','product_property_type','id','CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product_property');
    }
}
