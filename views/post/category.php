<?php
use yii\helpers\Html;

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Personal blog'
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Personal blog, programming, developing'
]);

$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['/post/categories']];
if($category == 'all'){
    $this->params['breadcrumbs'][] = ['label' => 'All posts'];
} else {
    $this->params['breadcrumbs'][] = Html::encode($posts[0]->category);
}

echo "<pre>";print_r($posts);echo "</pre>";