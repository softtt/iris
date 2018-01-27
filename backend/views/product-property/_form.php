<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProductProperty */
/* @var $form yii\widgets\ActiveForm */
/* @var $types array */
?>

<div class="product-property-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->dropDownList($types, ['id'  => 'prod-prop-type-dropdown']) ?>

    <?= $form->field($model, 'prop_value')->textInput(['maxlength' => true, 'id' => 'colorpickerField']) ?>

    <div id="colPick"></div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
