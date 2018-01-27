<?php

namespace common\models;

use common\models\ProductProperty;
use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property UploadedFile $cover
 * @property double $price
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Product extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['status'], 'integer'],
            [['cover'],'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'cover' => 'Cover',
            'price' => 'Price',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function upload()
    {
        $this->cover->saveAs(dirname(__FILE__).'/../../frontend/web/product-covers/' . $this->cover->baseName .
            '.' . $this->cover->extension, false);
        if ($this->validate()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteImage()
    {
        $image = dirname(__FILE__).'/../../frontend/web/product-covers/' . $this->cover;
        if (unlink($image)) {
            $this->cover = null;
            if ($this->save(false)) {
                return true;
            }
        }
        return false;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function getProductProperties()
    {
        return $this->hasMany(ProductProperty::classname(),['id'=>'comment_id'])
            ->viaTable('product_product_property',['product_property_id','id']);
    }

    /**
     * @inheritdoc
     * @return ProductQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductQuery(get_called_class());
    }
}
