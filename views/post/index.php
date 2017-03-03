<?php

use app\assets\MasonryAsset;
use yii\bootstrap\Carousel;
use yii\helpers\Html;

$this->title = "Personal blog";

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Personal blog'
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Personal blog, programming, developing'
]);
MasonryAsset::register($this);
?>
</div>
<div class="container-fluid hidden-xs">
    <div class="row">
        <?php
        $slides = [
            [
                'content' => '<img src="/images/slides/slide1.jpg"/>',
                'caption' => '<h1>Заголовок</h1><p class="hidden-xs">Какой-то дополнительный текст</p><p><a href="/article/link/1" class="btn btn-primary">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
                'options' => []
            ],
            [
                'content' => '<img src="/images/slides/slide2.jpg"/>',
                'caption' => '<h1>Helicopter</h1><p class="hidden-xs">A helicopter is a type of rotorcraft in which lift and thrust are supplied by rotors.</p>',
                'options' => []
            ],
            [
                'content' => '<img src="/images/slides/slide3.jpg"/>',
                'caption' => '',
                'options' => ['class' => 'my-class']
            ]
        ];
        echo Carousel::widget([
            'items' => $slides,
            'options' => ['class' => 'carousel slide', 'data-interval' => '8000'],
            'controls' => [
                '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
                '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>',
            ]
        ]);
        ?>
    </div>
</div>
<div class="container">
    <div class="container">
        <h2>Last <?=$quantity?> posts</h2>
    </div>
    <div class="row">
        <div class="container-fluid masonry" data-columns>
            <?foreach ($posts as $post){?>
                <div class="item">
                    <div class="thumbnail">
                        <img src="<?=$post->imagepath?>" class="img-responsive" alt="">
                        <div class="caption">
                            <h3><?=Html::encode($post->title)?></h3>
                            <p><?=Html::encode($post->intro_text)?></p>
                            <p><a href="<?=Yii::$app->urlManager->createUrl(['post/article', 'id' => $post->id])?>" class="btn btn-success btn-block" role="button">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></p>
                        </div>
                    </div>
                </div>
            <?}?>
        </div>
    </div>
    <div class="container">
        <h2>Categories:</h2>
    </div>
    <div class="row">
        <?php foreach ($categories as $category){?>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <a href="<?=Yii::$app->urlManager->createUrl(['post/category', 'category' => $category->category])?>">
                    <h2><?=$category->category?><span class="badge badge-success"><?=$count?></span></h2>
                </a>
            </div>
        <?}?>
    </div>
    <!--TODO:: finish category slider*/-->
    <div class="container">
        <div class="row">
            <h2>Media Slider Carousel BS3</h2>
        </div>
        <div class='row'>
            <div class='col-md-8'>
                <div class="carousel slide media-carousel" id="media">
                    <div class="carousel-inner">
                        <div class="item  active">
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="thumbnail" href="#">link1</a>
                                </div>
                                <div class="col-md-4">
                                    <a class="thumbnail" href="#">link2</a>
                                </div>
                                <div class="col-md-4">
                                    <a class="thumbnail" href="#">link3</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="thumbnail" href="#">link4</a>
                                </div>
                                <div class="col-md-4">
                                    <a class="thumbnail" href="#">link5</a>
                                </div>
                                <div class="col-md-4">
                                    <a class="thumbnail" href="#">link6</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="thumbnail" href="#">link7</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a data-slide="prev" href="#media" class="left carousel-control"></a>
                    <a data-slide="next" href="#media" class="right carousel-control"></a>
                </div>
            </div>
        </div>
    </div>
