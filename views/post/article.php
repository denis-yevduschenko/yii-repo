<?php
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
        <div class="col-xs-12 col-sm-6">
            <?=$post->intro_text?>
        </div>
        <div class="hidden-xs col-sm-6">
            <img src="<?=$post->imagepath?>" class ="img-thumbnail pull-right">

        </div>
    </div>
    <div class="col-xs-12">
        <?=$post->full_text?>
    </div>
</div>
<div class="row">
    <? foreach ($comments as $comment){?>
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
    <style>
        .parent{
            vertical-align: middle;
        }

        .panel-shadow {
            box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;
        }
        .panel-white {
            border: 1px solid #dddddd;
        }
        .panel-white  .panel-heading {
            color: #333;
            background-color: #fff;
            border-color: #ddd;
        }
        .panel-white  .panel-footer {
            background-color: #fff;
            border-color: #ddd;
        }

        .post .post-heading {
            height: 95px;
            padding: 20px 15px;
        }
        .post .post-heading .avatar {
            width: 60px;
            height: 60px;
            display: block;
            margin-right: 15px;
        }
        .post .post-heading .meta .title {
            margin-bottom: 0;
        }
        .post .post-heading .meta .title a {
            color: black;
        }
        .post .post-heading .meta .title a:hover {
            color: #aaaaaa;
        }
        .post .post-heading .meta .time {
            margin-top: 8px;
            color: #999;
        }
        .post .post-image .image {
            width: 100%;
            height: auto;
        }
        .post .post-description {
            padding: 15px;
        }
        .post .post-description p {
            font-size: 14px;
        }
        .post .post-description .stats {
            margin-top: 20px;
        }
        .post .post-description .stats .stat-item {
            display: inline-block;
            margin-right: 15px;
        }
        .post .post-description .stats .stat-item .icon {
            margin-right: 8px;
        }
        .post .post-footer {
            border-top: 1px solid #ddd;
            padding: 15px;
        }
        .post .post-footer .input-group-addon a {
            color: #454545;
        }
        .post .post-footer .comments-list {
            padding: 0;
            margin-top: 20px;
            list-style-type: none;
        }
        .post .post-footer .comments-list .comment {
            display: block;
            width: 100%;
            margin: 20px 0;
        }
        .post .post-footer .comments-list .comment .avatar {
            width: 35px;
            height: 35px;
        }
        .post .post-footer .comments-list .comment .comment-heading {
            display: block;
            width: 100%;
        }
        .post .post-footer .comments-list .comment .comment-heading .user {
            font-size: 14px;
            font-weight: bold;
            display: inline;
            margin-top: 0;
            margin-right: 10px;
        }
        .post .post-footer .comments-list .comment .comment-heading .time {
            font-size: 12px;
            color: #aaa;
            margin-top: 0;
            display: inline;
        }
        .post .post-footer .comments-list .comment .comment-body {
            margin-left: 50px;
        }
        .post .post-footer .comments-list .comment > .comments-list {
            margin-left: 50px;
        }
    </style>
<?php echo "<pre>";print_r($comments);echo "</pre>";?>