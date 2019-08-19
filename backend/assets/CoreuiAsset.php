<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class CoreuiAsset extends AssetBundle
{
    public $basePath = '@vendor/coreui/coreui/dist/';
    public $baseUrl = '/vendor/coreui/coreui/dist/';
    public $css = [
        'css/coreui.min.css',
    ];
    public $js = [
        'js/coreui.min.js'
    ];
    public $depends = [
        'yii\bootstrap4\BootstrapAsset',
    ];
}
