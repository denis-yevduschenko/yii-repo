<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Comments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comments-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-xs-12 col-sm-3">
    <?= $form->field($model, 'post_id')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-12 col-sm-9">
    <?= $form->field($model, 'author_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-12">
    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>
    </div>
    <div class="col-xs-12 col-sm-4">
    <? $now = new DateTime();?>
    <?= $form->field($model, 'date')->textInput(['maxlength' => true, 'value' => $now->getTimestamp()]) ?>
    </div>
    <div class="col-xs-12 col-sm-4">
    <?= $form->field($model, 'liked')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-12 col-sm-4">
    <?= $form->field($model, 'disliked')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-offset-4 col-sm-4">
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success btn-block' : 'btn btn-primary btn-block']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
