<?php

use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>
        <div class="col-xs-12 col-sm-6 col-lg-3">
            <?= $form->field($model, 'is_release')->textInput() ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3">
            <?= $form->field($model, 'category')->dropDownList([
                'News' => 'News',
                'Android' => 'Android',
                'PHP' => 'PHP',
                'Java' => 'Java',
                'Books' => 'Books',
                'Web' => 'Web',
                'Windows' => 'Windows',
            ], ['prompt' => '']) ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3">
            <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-12">
            <?= $form->field($model, 'intro_text')->textarea(['rows' => 4]) ?>
        </div>
        <div class="col-xs-12">
            <?= $form->field($model, 'full_text')->widget(CKEditor::className(), [
                'options' => ['rows' => 6],
                'preset' => 'full',
                'clientOptions' => [
                    'skin' => 'moono'
                ]
            ]) ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <? $now = new DateTime();?>
            <?= $form->field($model, 'date')->textInput(['maxlength' => true, 'value' => $now->getTimestamp()]) ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <?= $form->field($model, 'meta_desc')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <?= $form->field($model, 'meta_key')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <?= $form->field($model, 'hits')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <?= $form->field($model, 'hide')->textInput() ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <?= $form->field($model, 'no_form')->textInput() ?>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
    <?php ActiveForm::end(); ?>

</div>
