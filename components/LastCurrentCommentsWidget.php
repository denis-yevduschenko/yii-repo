<?php

namespace app\components;

use app\models\Comments;
use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class LastCurrentCommentsWidget extends Widget
{
    public $comments;
    public $postId;

    public function run(){
        $comments = Comments::find()
            ->where(['post_id' => $this->postId])
            ->orderBy(["id" => SORT_DESC])
            ->limit(2)
            ->all();
        $htmlComment = '';
        $elComment = '';
        foreach ($comments as $comment) {
            /*post-description*/
            $like = Html::tag('i', '', ['class' => "fa fa-thumbs-down icon"]);
            $like = Html::tag('a', $like.$comment->liked, ['href' => '#', 'class' => "btn btn-default stat-item"]);
            $dislike = Html::tag('i', '', ['class' => "fa fa-thumbs-down icon"]);
            $dislike = Html::tag('a', $dislike.$comment->disliked, ['href' => '#', 'class' => "btn btn-default stat-item"]);
            $divBody = Html::tag('div', $like.$dislike, ['class' => "stats"]);
            $text = Html::tag('p', $comment->text);
            $divBody = Html::tag('div', $text.$divBody, ['class' => "post-description"]);

            /*post-heading*/
            $name = Html::tag('b', $comment->author_name);
            $link = Html::tag('a', $name, ['href' => '#', 'class' => "btn btn-default stat-item"]);
            $title = Html::tag('div', $link." made a post. #".$comment->id,  ['class' => "title h5"]);
            $date = Html::tag('h6', $comment->date, ['class' => "text-muted time"]);
            $divTitle = Html::tag('div', $title.$date, ['class' => "pull-left meta"]);
            $image = Html::img('http://bootdey.com/img/Content/user_1.jpg', ['alt' => '$comment->author_name', 'class' => "img-circle avatar"]);
            $divImage = Html::tag('div', $image, ['class' => "pull-left image"]);
            $divTitle = Html::tag('div', $divImage.$divTitle, ['class' => "post-heading"]);
            $elComment .= Html::tag('div', $divTitle.$divBody, ['class' => "panel panel-white post panel-shadow"]);

            /*Result comment*/
            $elComment = Html::tag('div', $elComment, ['class' => "col-xs-12"]);

            $htmlComment .= $elComment;
            unset($like, $dislike, $divBody, $text, $name, $link, $title, $date, $divTitle, $image, $divImage, $divTitle, $elComment);
        }
        if($htmlComment){
            $title =Html::tag('h2', 'Last comments:');
            $htmlComment = $title.$htmlComment;
        }
        
        return $htmlComment;
    }
}

