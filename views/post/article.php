<?php
use app\models\Posts;

$post = Posts::findOne($id);

$newHits = $post->hits;
$post->hits = ++$newHits;
$post->save();

$url = '/post/article?id='.$post->id;
$this->params['breadcrumbs'][] = ['label' => 'Post', 'url' => ['/post/test']];
$this->params['breadcrumbs'][] = $post->title;

echo "<pre>";print_r($post);echo "</pre>";