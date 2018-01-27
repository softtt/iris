<?php
    /** @var \common\models\Product $model */

    use yii\helpers\Html;
?>
<div class="grid1_of_4">
    <div class="content_box"><a href="details.html">
            <?= Html::img('@web/product-covers/'. $model->cover, ['class' => 'img-responsive ']);?>
        </a>
        <h4><a href="details.html"><?=$model->name?></a></h4>
        <p><?=$model->description?></p>
        <div class="grid_1 simpleCart_shelfItem">

            <div class="item_add"><span class="item_price"><h6><?=$model->price. 'P.'?></h6></span></div>
            <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
        </div>
    </div>
</div>