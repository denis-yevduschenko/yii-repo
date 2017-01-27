<?php
use app\models\Posts;
use yii\web\NotFoundHttpException;

$post = Posts::findOne($id);
if (!$post){
    throw new NotFoundHttpException('Article not found');
}
$newHits = $post->hits;
$post->hits = ++$newHits;
$post->save();

$url = '/post/article?id='.$post->id;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['/post/categories']];
$this->params['breadcrumbs'][] = $post->title;

echo "<pre>";print_r($post);echo "</pre>";