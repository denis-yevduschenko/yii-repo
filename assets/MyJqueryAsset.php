<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class MyJqueryAsset extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
        '/js/jquery/jquery-3.1.1.js',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD
    ];

}