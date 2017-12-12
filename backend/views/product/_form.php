<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use app\models\Category;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category')->dropDownList(Category::getCategoryService()->getNormalizedCategories())?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?php if (!empty($model->cover) && file_exists(dirname(__FILE__).'/../../../frontend/web/product-covers/' . $model->cover)) {
        echo Html::img(mb_substr( Yii::$app->urlManager->createAbsoluteurl(Yii::$app->urlManagerFrontend->baseUrl .
            '/product-covers/' . $model->cover), 1),['width' => '400px', 'height' => '400px']);
        echo Html::a('Remove Image', Url::to(['/product/delete-image', 'id'=>$model->id]),['class' => 'btn btn-danger']);
    } else {
        echo $form->field($model, 'cover')->fileInput();
    }?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList(\common\enums\ProductStatusEnum::items()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
