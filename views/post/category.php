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
}?>

<?foreach ($posts as $post){?>
    <? if($post->hide){
       continue;
    }?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4><?=Html::encode($post->title)?><small class="bg-primary pull-right"><?=Html::encode($post->date)?></small></h4>
        </div>
        <div class="panel-body">
            <div class="hidden-xs col-sm-3">
                <?=Html::img($post->imagepath, ['alt' => $post->title, 'height' => 200, 'class' => 'img-responsive'])?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="col-xs-8">
                    <?=Html::encode($post->intro_text)?>
                </div>
                <div class="col-xs-4 pull-down">
                    <div class="btn-group-vertical btn-block">
                        <a href="<?=Yii::$app->urlManager->createUrl(['post/category', 'category' => $post->category])?>" class="btn btn-default" role="button"><?=$post->category?></a>
                        <a href="<?=Yii::$app->urlManager->createUrl(['post/article', 'id' => $post->id])?>" class="btn btn-success" role="button">Read more <span class="badge"><?=$post->hits?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?}?>

<?echo "<pre>";print_r($posts);echo "</pre>";?>

<script>
    $('.pull-down').each(function () {
        var $this = $(this);
        $this.css('margin-top', $('.panel-body').height() - $this.height());
    });
    $(window).resize(function (){
        $('.pull-down').each(function () {
            var $this = $(this);
            $this.css('display', 'none');
            panelHeight = $('.panel-body').height();
            $this.css('display', 'block');
            if ((panelHeight - $this.height()) <= 0){
                $this.css('margin-top', 0);
            } else {
                $this.css('margin-top', panelHeight - $this.height());
            }
        });
    });
</script>
