<?php
    use yii\widgets\ListView;
?>

<div class="women">
    <a href="#"><h4>Enthecwear - <span>4449 itemms</span> </h4></a>
    <ul class="w_nav">
        <li>Sort : </li>
        <li><a class="active" href="#">popular</a></li> |
        <li><a href="#">new </a></li> |
        <li><a href="#">discount</a></li> |
        <li><a href="#">price: Low High </a></li>
        <div class="clear"></div>
    </ul>
    <div class="clearfix"></div>
</div>
<!-- grids_of_4 -->
<?= ListView::widget([
    'dataProvider' => $listDataProvider,
    'options' => [
        'tag' => 'div',
        'class' => 'list-wrapper',
        'id' => 'list-wrapper',
    ],
    'layout' => "{pager}\n{items}",
    'itemView' => 'list_item',
]);?>

