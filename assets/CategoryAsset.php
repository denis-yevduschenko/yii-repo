<?php

namespace app\assets;

use yii\web\AssetBundle;

class CategoryAsset extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/category.css',
    ];
    public $depends = [
        'app\assets\AppAsset',
    ];
}