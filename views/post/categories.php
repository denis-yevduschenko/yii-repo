<?php
use app\models\Posts;

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Personal blog'
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Personal blog, programming, developing'
]);

$this->params['breadcrumbs'][] = ['label' => 'Categories'];
?>
<div class="container">
    <?php foreach ($categories as $category){
        $count = Posts::retrieveQuantityPostsCategory($category->category)?>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="<?=Yii::$app->urlManager->createUrl(['post/category', 'category' => $category->category])?>">
                <h2><?=$category->category?><span class="badge badge-success"><?=$count?></span></h2>
            </a>
        </div>
    <?}?>
</div>
<?echo "<pre>";print_r($categories);echo "</pre>";

