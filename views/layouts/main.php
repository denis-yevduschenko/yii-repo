<?php

/* @var $this \yii\web\View */
/* @var $content string */
$this->registerCssFile('css/footer.css');

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
    <?php
    NavBar::begin([
        'brandLabel' => 'My Future Blog',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => Icon::show('home',['class'=>'fa-1x']).'Home', 'url' => ['/']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
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

<!--<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>-->
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
                                    js.src = "//connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v2.0";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
                            </script>

                            <div class="fb-like" data-href="" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

                            <a href="https://twitter.com/share" class="twitter-share-button" data-url="">Tweet</a>
                            <script>
                                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
                            </script>

                            <div class="g-plusone" data-annotation="inline" data-width="300" data-href=""></div>

                            <!-- Helyezd el ezt a címkét az utolsó +1 gomb címke mögé. -->
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
