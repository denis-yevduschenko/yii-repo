<h1>Comments</h1>
<?php foreach ($comments as $comment){?>
    <li><b><?=$comment->name?>:</b> <?=$comment->text?></li>
<?}?>