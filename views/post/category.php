<?php
use app\assets\CategoryAsset;
use kartik\icons\Icon;
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

CategoryAsset::register($this);?>

<?foreach ($posts as $post){?>
    <? if($post->hide){
       continue;
    }?>
    <div class="col-xs-2">
        <div class="panel panel-info">
            <div class="panel-heading info-title">
                <?=Html::encode($post->date)?>
            </div>
            <div class="panel-body info-block">
                <p><?=Icon::show('user')?>Denis</p>
                <p><?=Icon::show('comments-o')?>23 comments</p>
                <p><?=Icon::show('book')?><?=$post->hits?> reads</p>
            </div>
        </div>
    </div>

    <div class="col-xs-10">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4><a href="<?=Yii::$app->urlManager->createUrl(['post/article', 'id' => $post->id])?>"><?=Html::encode($post->title)?></a></h4>
            </div>
            <div class="panel-body content">
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
    </div>
<?}?>

<script>
    $('.pull-down').each(function () {
        var $this = $(this);
        $this.css('margin-top', $('.content').height() - $this.height());
    });
    $(window).resize(function (){
        $('.pull-down').each(function () {
            var $this = $(this);
            $this.css('display', 'none');
            panelHeight = $('.content').height();
            $this.css('display', 'block');
            if ((panelHeight - $this.height()) <= 0){
                $this.css('margin-top', 0);
            } else {
                $this.css('margin-top', panelHeight - $this.height());
            }
        });
    });
</script>
