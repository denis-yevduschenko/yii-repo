<?php
use app\models\Posts;

$post = Posts::findOne($id);

$newHits = $post->hits;
$post->hits = ++$newHits;
$post->save();

echo "<pre>";print_r($post);echo "</pre>";