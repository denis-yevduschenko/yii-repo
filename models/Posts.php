<?php

namespace app\models;

use yii\db\ActiveRecord;

class Posts extends ActiveRecord{
    public static function tableName()
    {
        return 'bl_posts';
    }

    /**
     * @param $category string
     * @return int|string
     */
    public static function retrieveQuantityPostsCategory($category){
        $quantity = Posts::find()->where(['category' => $category])->count();
        return $quantity;
    }
}
?>