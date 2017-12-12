<?php


namespace frontend\assets;

use yii\web\AssetBundle;

class GretongAsset extends AssetBundle
{
    public $sourcePath = '@frontend/themes/gretong/assets';
    public $css = [
        'css/bootstrap.css',
        'css/etalage.css',
        'css/megamenu.css',
        'css/style.css'
    ];
    public $js = [
        'js/jquery.etalage.min.js',
        'js/jquery.jscrollpane.min.js',
        'js/jquery-1.11.1.min.js',
        'js/jquery-ui.min.js',
        'js/megamenu.js',
        'js/menu_jquery.js',
        'js/simpleCart.min.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}