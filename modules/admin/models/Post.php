<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "bl_posts".
 *
 * @property integer $id
 * @property integer $is_release
 * @property string $category
 * @property string $title
 * @property string $img
 * @property string $intro_text
 * @property string $full_text
 * @property integer $date
 * @property string $meta_desc
 * @property string $meta_key
 * @property integer $hits
 * @property integer $hide
 * @property integer $no_form
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bl_posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_release', 'category', 'title', 'img', 'intro_text', 'full_text', 'meta_desc', 'meta_key', 'hits', 'hide', 'no_form'], 'required'],
            [['is_release', 'date', 'hits', 'hide', 'no_form'], 'integer'],
            [['category', 'intro_text', 'full_text'], 'string'],
            [['title', 'img', 'meta_desc', 'meta_key'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'is_release' => 'Is Release (true or false)',
            'category' => 'Category',
            'title' => 'Title',
            'img' => 'Img',
            'intro_text' => 'Intro Text',
            'full_text' => 'Full Text',
            'date' => 'Date',
            'meta_desc' => 'Meta Desc',
            'meta_key' => 'Meta Key',
            'hits' => 'Hits',
            'hide' => 'Hide (true or false)',
            'no_form' => 'No Form (true or false)',
        ];
    }
}
