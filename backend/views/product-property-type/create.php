<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProductPropertyType */

$this->title = 'Create Product Property Type';
$this->params['breadcrumbs'][] = ['label' => 'Product Property Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-property-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
