<?php
use yii\helpers\Html;


$newHits = $post->hits;
$post->hits = ++$newHits;
$post->save();

$url = '/post/article?id='.$post->id;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['/post/categories']];
$this->params['breadcrumbs'][] = Html::encode($post->title);

echo "<pre>";print_r($post);echo "</pre>";