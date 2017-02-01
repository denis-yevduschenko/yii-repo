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
    <div class="col-xs-12">
        <img src="<?=$post->imagepath?>" class ="img-thumbnail pull-right">
        <?=$post->full_text?>
    </div>
</div>


<?php echo "<pre>";print_r($post);echo "</pre>";?>