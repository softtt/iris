<?php


namespace frontend\assets;

use yii\web\AssetBundle;

class InTheMountainsAsset extends AssetBundle
{
    public $sourcePath = '@frontend/themes/in-the-mountains/assets';
    public $css = [
        'main_style.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}