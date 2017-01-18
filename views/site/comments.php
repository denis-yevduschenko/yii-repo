<?php
use yii\widgets\LinkPager;
?>
<h1>Comments</h1>
<p>Last time you visited <a href="<?=Yii::$app->urlManager->createUrl(['site/user', 'name' => $name])?>"><?=$name?></a></p>
<?php foreach ($comments as $comment){?>
    <li>
        <b><a href="<?=Yii::$app->urlManager->createUrl(['site/user', 'name' => $comment->name])?>"><?=$comment->name?></a>:</b>
        <?=$comment->text?>
    </li>
<?}?>
<?=LinkPager::widget(['pagination' => $pagination])?>
