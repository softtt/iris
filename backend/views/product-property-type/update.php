<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductPropertyType */

$this->title = 'Update Product Property Type: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Product Property Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-property-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
