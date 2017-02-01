<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'is_release',
            'category',
            'title',
            'img',
            'intro_text:ntext',
            // 'full_text:ntext',
            'date',
            // 'meta_desc',
            // 'meta_key',
            'hits',
            'hide',
            // 'no_form',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
