<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class MasonryAsset extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/singelton/masonry.css',
    ];
    public $js = [
        '/js/salvattore.min.js',
    ];
    public $jsOptions = [
        'position' => View::POS_END
    ];
}