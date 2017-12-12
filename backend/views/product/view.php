<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'description:ntext',
            [
                'attribute'=>'cover',
                //createAbsoluteUrl puts / in the beginning of rhe url so we should to delete it using substring
                'value'=> mb_substr( Yii::$app->urlManager->createAbsoluteurl(Yii::$app->urlManagerFrontend->baseUrl . '/product-covers/' . $model->cover),
                    1),
                'format' =>  'image',
            ],
            'price',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
