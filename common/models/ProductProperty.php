<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_property".
 *
 * @property integer $id
 * @property integer $type
 * @property string $prop_value
 *
 * @property ProductProductProperty[] $productProductProperties
 * @property ProductProperty[] $productProperties
 * @property Product[] $products
 * @property ProductPropertyType $type0
 */
class ProductProperty extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_property';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'integer'],
            [['prop_value'], 'string', 'max' => 255],
            [['type'], 'exist', 'skipOnError' => true, 'targetClass' => ProductPropertyType::className(), 'targetAttribute' => ['type' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'prop_value' => 'Prop Value',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductProductProperties()
    {
        return $this->hasMany(ProductProductProperty::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['id' => 'product_id'])->viaTable('product_product_property', ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(ProductPropertyType::className(), ['id' => 'type']);
    }
}
