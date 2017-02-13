<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "{{%bl_comments}}".
 *
 * @property string $id
 * @property string $post_id
 * @property string $author_name
 * @property string $text
 * @property string $date
 * @property string $liked
 * @property string $disliked
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bl_comments}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'author_name', 'text', 'date'], 'required'],
            [['post_id', 'date', 'liked', 'disliked'], 'integer'],
            [['text'], 'string'],
            [['author_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_id' => 'Post ID',
            'author_name' => 'Author Name',
            'text' => 'Text',
            'date' => 'Date',
            'liked' => 'Liked',
            'disliked' => 'Disliked',
        ];
    }
}
