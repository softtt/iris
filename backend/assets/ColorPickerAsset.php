<?php

namespace backend\assets;


use yii\web\AssetBundle;

class ColorPickerAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/colorpicker.css',
    ];
    public $js = [
        'js/colorpicker.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}