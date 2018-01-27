<?php

namespace common\services;


use common\models\Category;
use yii\data\ArrayDataProvider;
use yii\db\Query;

class CategoryService extends BaseService
{
    public function getNormalizedCategories()
    {
        $result = [];
        $categories = Category::find()->all();

        foreach ($categories as $category) {
            $result[$category->id] = $category->title;
        }

        return $result;
    }
}
