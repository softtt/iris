<?php


namespace frontend\controllers;


use common\models\Product;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class CatalogController extends Controller
{
    public function beforeAction($action)
    {
        $this->layout = 'withSidebar';

        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Product::find()
        ]);
        return $this->render('index', ['listDataProvider' => $dataProvider]);
    }
}