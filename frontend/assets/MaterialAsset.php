<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MaterialAsset extends AssetBundle
{
    public $basePath = '@themes/material';
    public $baseUrl = '@web';
    public $css = [
        'dist/css/bootstrap-material-design.css',
        'dist/css/bootstrap-material-design.min.css',
        'site.css'
    ];
    public $js = [
        'dist/js/material.min.js',
        'js/project.min.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
