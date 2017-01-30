<?php
use app\models\Posts;

$this->params['breadcrumbs'][] = ['label' => 'Categories'];
?>
<div class="container">
<?php foreach ($categories as $category){
    $count = Posts::retrieveQuantityPostsCategory($category->category)?>
    <div class="col-xs-12 col-sm-12 col-md-6">
        <a href="<?=Yii::$app->urlManager->createUrl(['post/category', 'category' => $category->category])?>">
            <h2><?=$category->category?><span class="badge badge-pill badge-success"><?=$count?></span></h2>
        </a>
    </div>
<?}?>
</div>
<?echo "<pre>";print_r($categories);echo "</pre>";

