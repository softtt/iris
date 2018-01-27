<?php

namespace common\models;

use common\services\CategoryService;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property integer $parent
 * @property string $description
 * @property string $title
 * @property UploadedFile $cover
 *
 * @property Product[] $products
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent'], 'integer'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['cover'],'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent' => 'Parent',
            'description' => 'Description',
            'title' => 'Title',
            'cover' => 'Cover',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return CategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CategoryQuery(get_called_class());
    }

    public static function getCategoryService()
    {
        return new CategoryService();
    }

    public function upload()
    {
        $this->cover->saveAs(dirname(__FILE__).'/../../frontend/web/category-covers/' . $this->cover->baseName .
            '.' . $this->cover->extension, false);
        if ($this->validate()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteImage()
    {
        $image = dirname(__FILE__).'/../../frontend/web/category-covers/' . $this->cover;
        if (unlink($image)) {
            $this->cover = null;
            if ($this->save(false)) {
                return true;
            }
        }
        return false;
    }

    public static function findByName($name)
    {
        $query = static::find();
        $query->where('title = "'.$name.'"');
        return new ActiveDataProvider([
            'query' => $query
        ]);
    }
}
