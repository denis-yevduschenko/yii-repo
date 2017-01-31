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
        $quantity = Posts::find()->where(['category' => $category])->count();
        return $quantity;
    }
}
?>