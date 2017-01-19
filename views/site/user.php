<?php
use app\components\Hello;
?>
<?=$name?>
<div>Widget says: <?=Hello::widget(['message' => 'Hello World!'])?></div>
