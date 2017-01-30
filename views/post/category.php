<?php
use yii\helpers\Html;

$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['/post/categories']];
if($category == 'all'){
    $this->params['breadcrumbs'][] = ['label' => 'All posts'];
} else {
    $this->params['breadcrumbs'][] = Html::encode($posts[0]->category);
}

echo "<pre>";print_r($posts);echo "</pre>";