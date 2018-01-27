<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'parent')->dropDownList(\common\enums\YesNoEnum::items()) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php if (!empty($model->cover) && file_exists(dirname(__FILE__).'/../../../frontend/web/category-covers/' . $model->cover)) {
        echo Html::img(mb_substr( Yii::$app->urlManager->createAbsoluteurl(Yii::$app->urlManagerFrontend->baseUrl .
            '/category-covers/' . $model->cover), 1),['width' => '400px', 'height' => '400px']);
        echo Html::a('Remove Image', Url::to(['/category/delete-image', 'id'=>$model->id]),['class' => 'btn btn-danger']);
    } else {
        echo $form->field($model, 'cover')->fileInput();
    }?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
