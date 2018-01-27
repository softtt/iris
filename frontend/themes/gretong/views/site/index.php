<?php

use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="arriv">
    <div class="container">

        <div class="arriv-top">
            <div class="col-md-6 arriv-left">
                <img src="">
                <?php echo Html::img('@web/img/iris4.jpg', ['class' => 'pull-left img-responsive']); ?>
                <?php echo Html::img(Yii::$app->homeUrl .'img/irises.jpg')?>
<!--               --><?php //if (!empty($irisCat->cover) && file_exists(dirname(__FILE__).'/../../../web/category-covers/' . $irisCat->cover)) {
//                echo Html::img(mb_substr( Yii::$app->urlManager->createAbsoluteurl(Yii::$app->urlManagerFrontend->baseUrl .
//                '/category-covers/' . $irisCat->cover), 1),['class' => "img-responsive img-big"]);
//               }?>

                <div class="arriv-info">
                    <h3>NEW ARRIVALS</h3>
                    <p>REVIVE YOUR WARDROBE WITH CHIC KNITS</p>
                    <div class="crt-btn">
                        <a href="details.html">TAKE A LOOK</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 arriv-right">
                <?php echo Html::img('@web/img/daylily.jpg', ['class' => 'img-responsive']); ?>
                <div class="arriv-info">
                    <h3>TUXEDO</h3>
                    <p>REVIVE YOUR WARDROBE WITH CHIC KNITS</p>
                    <div class="crt-btn">
                        <a href="details.html">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

        <div class="arriv-las">
            <div class="col-md-4 arriv-left2">
                <?php echo Html::img('@web/img/new.jpg', ['class' => 'img-responsive img-little']); ?>
                <div class="arriv-info2">
                    <a href="details.html"><h3>Casual Glasses<i class="ars"></i></h3></a>
                </div>
            </div>
            <div class="col-md-4 arriv-middle">
                <?php echo Html::img('@web/img/other.jpg', ['class' => 'img-responsive img-little']); ?>
                <div class="arriv-info3">
                    <h3>FRESH LOOK T-SHIRT</h3>
                    <div class="crt-btn">
                        <a href="details.html">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 arriv-right2">
                <?php echo Html::img('@web/img/specialities.jpg', ['class' => 'img-responsive img-little']); ?>
                <div class="arriv-info2">
                    <a href="details.html"><h3>Elegant Watches<i class="ars"></i></h3></a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>