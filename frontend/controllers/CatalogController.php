<?php


namespace frontend\controllers;


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
        return $this->render('index');
    }
}