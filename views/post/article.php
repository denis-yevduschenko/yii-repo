<?php
use app\components\LastCurrentCommentsWidget;
use app\components\LastPostsWidget;
use yii\helpers\Html;

$post->updateCounters(['hits' => 1]);

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
