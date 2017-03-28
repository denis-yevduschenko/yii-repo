<?php

namespace app\models;

use yii\db\ActiveRecord;

class Posts extends ActiveRecord{
    public $imagepath;

    public static function tableName()
    {
        return 'bl_posts';
    }

    /**
     * @return mixed
     */
    public function afterFind(){

        $this->imagepath = "/images/posts/".$this->img;

        $months = [
            1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
            5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
            9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December',
        ];
        $this->date = date('j ', $this->date).$months[date('n', $this->date)].date(' Y', $this->date);
        
    }

    /**
     * @param $category string
     * @return int|string
     */
    public static function retrieveQuantityPostsCategory($category){
        return Posts::find()->where(['category' => $category, 'hide' => '0'])->count();
    }

    public static function getLatestPosts($quantity){
        return Posts::find()
            ->select('id, title, img, intro_text')
            ->where(['hide' => 0])
            ->orderBy(["id" => SORT_DESC])
            ->limit($quantity)
            ->all();
    }

    public static function getCategories(){
        return Posts::find()
            ->select('category')
            ->groupBy('category')
            ->all();
    }

    public static function getPostConcreteCategory($category){
        return Posts::find()
            ->where(['category' => $category])
            ->orderBy(["id" => SORT_DESC])
            ->all();
    }
}
?>