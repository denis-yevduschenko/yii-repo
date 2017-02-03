<?php

/* @var $this \yii\web\View */
/* @var $content string */

use kartik\icons\Icon;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

Icon::map($this);
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-4">
                    <div class="top-number"><p><i class="fa fa-envelope-o"></i> d.yevduschenko@gmail.com</p></div>
                </div>
                <div class="col-sm-6 col-xs-8">
                    <div class="social">
                        <ul class="social-share">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                        <div class="search" style="display:inline-block"> <!-- TODO :: убрать/нужно пофиксить -->
                            <form role="form">
                                <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    NavBar::begin([
        'brandLabel' => 'MFB',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-static-top',
        ],
    ]);
    echo Nav::widget([
        'activateItems'=>'true',
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => Icon::show('home',['class'=>'fa-1x']).'Home', 'url' => ['/']],
            ['label' => Icon::show('mobile',['class'=>'fa-1x']).'Test', 'url' => [Yii::$app->urlManager->createUrl(['/post/test'])]],
            ['label' => Icon::show('list',['class'=>'fa-1x']).'Categories',
                'url' => ['post/categories'],
                'options'=>['class'=>'dropdown'],
                'template' => '<a href="{url}" class="url-class">{label}</a>',
                'items' => [
                    ['label' => 'News', 'url' => [Yii::$app->urlManager->createUrl(['/post/category', 'category' => 'News'])]],
                    ['label' => 'Android', 'url' => [Yii::$app->urlManager->createUrl(['/post/category', 'category' => 'Android'])]],
                    ['label' => 'PHP', 'url' => [Yii::$app->urlManager->createUrl(['/post/category', 'category' => 'PHP'])]],
                    ['label' => 'Java', 'url' => [Yii::$app->urlManager->createUrl(['/post/category', 'category' => 'Java'])]],
                    ['label' => 'Books', 'url' => [Yii::$app->urlManager->createUrl(['/post/category', 'category' => 'Books'])]],
                    ['label' => 'Web', 'url' => [Yii::$app->urlManager->createUrl(['/post/category', 'category' => 'Web'])]],
                    ['label' => 'Windows', 'url' => [Yii::$app->urlManager->createUrl(['/post/category', 'category' => 'Windows'])]],
                    '<li class="divider"></li>',
                    ['label' => 'All posts', 'url' => [Yii::$app->urlManager->createUrl(['/post/category'])]],
                    ['label' => 'Categories', 'url' => [Yii::$app->urlManager->createUrl(['/post/categories'])]],
                ]
            ],
            ['label' => Icon::show('info-circle',['class'=>'fa-1x']).'About', 'url' => [Yii::$app->urlManager->createUrl(['/site/about'])]],
            ['label' => Icon::show('commenting-o',['class'=>'fa-1x']).'Contact', 'url' => [Yii::$app->urlManager->createUrl(['/site/contact'])]],
            Yii::$app->user->isGuest ? (
                ['label' => Icon::show('sign-in',['class'=>'fa-1x']).'Login', 'url' => [Yii::$app->urlManager->createUrl(['/post/login'])]]
            ) : (
                '<li>'
                . Html::beginForm(Yii::$app->urlManager->createUrl(['/site/logout']), 'post')
                . Html::submitButton(
                    Icon::show('sign-out',['class'=>'fa-1x']).'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-info logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
        'encodeLabels' => false,
    ]);
    NavBar::end();
    ?>
    <div class="container">
        <?= Breadcrumbs::widget([
            'homeLink' => ['label' => Icon::show('home',['class'=>'fa-2x']).'Home', 'url' => '/'],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'encodeLabels' => false,
        ]) ?>
        <?= $content ?>
    </div>
</div>

<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<hr>

<footer>
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="container">
                            <div class="col-lg-3 col-md-6">
                                <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                                    <p style="text-align:center; margin-top:20px;">
                                        <img src="http://placehold.it/500x200" class="img-responsive" alt="">
                                    </p>
                                    <div class="caption">
                                        <div class="blur"></div>
                                        <div class="caption-text">
                                            <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">THIS IS H3</h3>
                                            <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
                                            <a class=" btn btn-default" href="#"><span class="glyphicon glyphicon-plus"> INFO</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                                    <p style="text-align:center; margin-top:20px;">
                                        <img src="http://placehold.it/500x200" class="img-responsive" alt="">
                                    </p>
                                    <div class="caption">
                                        <div class="blur"></div>
                                        <div class="caption-text">
                                            <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">THIS IS H3</h3>
                                            <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
                                            <a class=" btn btn-default" href="#"><span class="glyphicon glyphicon-plus"> INFO</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                <h3>Categories:</h3>
                                <ul>
                                    <li><a href=""><i class="fa fa-file"></i> News</a></li>
                                    <li><a href=""><i class="fa fa-android"></i> Android</a></li>
                                    <li><a href=""><i class="fa fa-code"></i> C#</a></li>
                                    <li><a href=""><i class="fa fa-code"></i> Java</a></li>
                                    <li><a href=""><i class="fa fa-book"></i> Books</a></li>
                                    <li><a href=""><i class="fa fa-globe"></i> Web</a></li>
                                    <li><a href=""><i class="fa fa-windows"></i> Windows</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                <h3>Contact:</h3>
                                <p>Have a question or feedback? Contact me!</p>
                                <p><a href="" title="Contact me!"><i class="fa fa-envelope"></i> Contact</a></p>
                                <h3>Follow:</h3>
                                <a href="" id="gh" target="_blank" title="Twitter">
                                    <span class="fa-stack fa-lg">
                                      <i class="fa fa-square-o fa-stack-2x"></i>
                                      <i class="fa fa-twitter fa-stack-1x"></i>
                                    </span>
                                    Twitter
                                </a>
                                <a href=""  target="_blank" title="GitHub">
                                    <span class="fa-stack fa-lg">
                                      <i class="fa fa-square-o fa-stack-2x"></i>
                                      <i class="fa fa-github fa-stack-1x"></i>
                                    </span>
                                    GitHub
                                </a>
                            </div>
                            <br/>
                            <div id="fb-root"></div>
                            <script>
                                (function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.0";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
                            </script>
                            <div class="container">
                                <div class="fb-like" data-href="" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

                                <a href="https://twitter.com/share" class="twitter-share-button" data-url="">Tweet</a>
                                <script>
                                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
                                </script>

                                <div class="g-plusone" data-annotation="inline" data-width="300" data-href=""></div>
                            </div>
                            <script type="text/javascript">
                                (function() {
                                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                    po.src = 'https://apis.google.com/js/platform.js';
                                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                })();
                            </script>
                            <br/>
                            <hr>
                            <p>Copyright © Your Website | <a href="">Privacy Policy</a> | <a href="">Terms of Use</a></p>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
