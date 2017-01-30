<?php
use yii\bootstrap\Carousel;
use yii\helpers\Html;

?>
</div>
<div class="container-fluid">
    <div class="row">
        <?php
        $slides = [
            [
                'content' => '<img src="/images/slides/slide1.jpg"/>',
                'caption' => '<h1>Заголовок</h1><p>Какой-то дополнительный текст</p><p><a href="/article/link/1" class="btn btn-primary">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
                'options' => []
            ],
            [
                'content' => '<img src="/images/slides/slide2.jpg"/>',
                'caption' => '<h1>Helicopter</h1><p>A helicopter is a type of rotorcraft in which lift and thrust are supplied by rotors.</p>',
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
    <div class="container-fluid">
        <div class="container">
            <h2>Last <?=$quantity?> posts</h2>
        </div>
        <?foreach ($posts as $post){?>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="<?=$post->img?>" class="img-responsive" alt="">
                    <div class="caption">
                        <h3><?=Html::encode($post->title)?></h3>
                        <p><?=Html::encode($post->intro_text)?></p>
                        <p><a href="<?=Yii::$app->urlManager->createUrl(['post/article', 'id' => $post->id])?>" class="btn btn-success btn-block" role="button">Button</a></p>
                    </div>
                </div>
            </div>
        <?}?>
    </div>
