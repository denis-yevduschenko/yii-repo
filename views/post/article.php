<?php
use yii\helpers\Html;


$newHits = $post->hits;
$post->hits = ++$newHits;
$post->save();

$url = '/post/article?id='.$post->id;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['/post/categories']];
$this->params['breadcrumbs'][] = Html::encode($post->title);?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-11"><h2><?=$post->title?><span class="badge badge-success">(reads:<?=$post->hits?>)</span></h2></div>
        <div class="col-sm-1 hidden-xs"><h2><?=$post->date?></h2></div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <img src="<?=$post->img?>" alt="">
            <?=$post->full_text?>
        </div>
    </div>
</div>

<?php echo "<pre>";print_r($post);echo "</pre>";?>