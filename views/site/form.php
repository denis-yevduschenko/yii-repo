<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

if($name){?>
    <p>Вы ввели имя: <b><?=$name?></b> и e-mail <b><?=$email?></b>.</p>
<?}?>
<?php $f = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);?>
    <?=$f->field($form, 'name')?>
    <?=$f->field($form, 'email')?>
    <?=$f->field($form, 'file')->fileInput()?>
    <?=Html::submitButton('Отправить')?>
<?php ActiveForm::end();?>