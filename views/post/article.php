<?php
use app\components\LastCurrentCommentsWidget;
use app\components\LastPostsWidget;
use yii\helpers\Html;

$post->updateCounters(['hits' => 1]);

$url = '/post/article?id='.$post->id;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['/post/categories']];
$this->params['breadcrumbs'][] = ['label' => $post->category, 'url' => [Yii::$app->urlManager->createUrl(['post/category', 'category' => $post->category])]];
$this->params['breadcrumbs'][] = Html::encode($post->title);

$this->registerMetaTag([
    'name' => 'description',
    'content' => $post->meta_desc
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $post->meta_key
]);?>

<div class="row">
    <div class="col-xs-12 col-sm-10"><h2><?=$post->title?><span class="badge badge-success">(reads:<?=$post->hits?>)</span></h2></div>
    <div class="col-sm-2 hidden-xs"><h2><small><?=$post->date?></small></h2></div>
</div><hr>
<div class="row">
    <div class="col-xs-12 parent">
        <div class="col-xs-12 col-sm-8">
            <div class="row">
                <?=$post->intro_text?>
            </div>
        </div>
        <div class="hidden-xs col-sm-4">
            <div class="row">
                <img src="<?=$post->imagepath?>" class ="img-thumbnail pull-right">
            </div>
        </div>
    </div>
    <div class="separator"></div>
    <div class="col-sm-12 col-md-8 text-full">
        <?=$post->full_text?>
    </div>
    <div class="hidden-sm col-md-4" data-spy="affix" data-offset-top="450" data-offset-bottom="450">
        <div class="last-posts wrapper">
            <?= LastPostsWidget::widget()?>
        </div>
        <style>
            .affix {
                top: 20px;
                right: 20px;
            }
            .last-comments h2{
                text-align: center;
                color: #c52d2f;
            }
            /*TODO:: fix image*/
            .last-posts{
                text-align: center;
                box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;
                border-radius: 4px;
                border: 1px solid #dddddd;
                background: black;
            }
            .last-posts h2{
                color: white;
            }
            .last-posts .wrapper{
                margin:3em 0;
            }
            .last-posts a, .last-posts a:visited,.last-posts a:hover,.last-posts a:active{
                -webkit-backface-visibility:hidden;
                backface-visibility:hidden;
                position:relative;
                transition:0.5s color ease;
                text-decoration:none;
                color:#81b3d2;
                font-size:1.0em;
            }
            .last-posts a:hover{
                color:#c52d2f;
            }
            .last-posts a.before:before, .last-posts a.after:after{
                content: "";
                transition:0.5s all ease;
                -webkit-backface-visibility:hidden;
                backface-visibility:hidden;
                position:absolute;
            }
            .last-posts a.before:before{
                top:-0.25em;
            }
            .last-posts a.after:after{
                bottom:-0.25em;
            }
            .last-posts a.before:before,.last-posts a.after:after{
                height:3px;
                height:0.21rem;
                width:0;
                background:#c52d2f;
            }

            .last-posts a.before:hover:before, .last-posts a.after:hover:after{
                width:100%;
            }
            .last-posts .square{
                box-sizing:border-box;
                margin-left:-0.4em;
                position:relative;
                font-size:1.0em;
                overflow:hidden;
            }
            .last-posts .square a{
                position:static;
                font-size:100%;
                padding:0.2em 0.4em;
            }
            .last-posts .square:before,.last-posts .square:after{
                content: "";
                box-sizing:border-box;
                transition:0.25s all ease;
                -webkit-backface-visibility:hidden;
                backface-visibility:hidden;
                position:absolute;
                width:3px;
                width:0.21rem;
                height:0;
                background:#c52d2f;
            }
            .last-posts .square:before{
                left:0;
                bottom:-0.2em;
            }
            .last-posts .square.individual:before{
                transition-delay:0.6s;
            }
            .last-posts .square:after{
                right:0;
                top:-0.2em;
            }

            .last-posts .square a:before{
                left:0;
                transition:0.25s all ease;
            }
            .last-posts .square a:after{
                right:0;
                transition:0.25s all ease;
            }

            .last-posts .square:hover:before,.square:hover:after{
                height:calc(100% + 0.4em);
            }
            .last-posts .square:hover a:before,.square:hover a:after{
                width:100%;
            }
        </style>

        <div class="last-comments wrapper">
            <div class="row">
                <?= LastCurrentCommentsWidget::widget(['postId' => $post->id])?>
            </div>
        </div>
        
    </div>
</div>
<div class="row">
    <?foreach ($comments as $comment){?>
        <div class="col-sm-8">
            <div class="panel panel-white post panel-shadow">
                <div class="post-heading">
                    <div class="pull-left image">
                        <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                    </div>
                    <div class="pull-left meta">
                        <div class="title h5">
                            <a href="#"><b><?=$comment->author_name?></b></a>
                            made a post. # <?=$comment->id?>
                        </div>
                        <h6 class="text-muted time"><?=$comment->date?></h6>
                    </div>
                </div>
                <div class="post-description">
                    <p><?=$comment->text?></p>
                    <div class="stats">
                        <a href="#" class="btn btn-default stat-item">
                            <i class="fa fa-thumbs-up icon"></i><?=$comment->liked?>
                        </a>
                        <a href="#" class="btn btn-default stat-item">
                            <i class="fa fa-thumbs-down icon"></i><?=$comment->disliked?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?}?>
</div>
<script>
    $('.text-full img').addClass("img-responsive");
</script>
