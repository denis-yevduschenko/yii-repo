<?php

namespace app\models;

use yii\db\ActiveRecord;

class Comments extends ActiveRecord{

    public static function tableName(){
        return 'bl_comments';
    }

    public function afterFind(){

        $months = [
            1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
            5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
            9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December',
        ];
        $this->date = date('j ', $this->date).$months[date('n', $this->date)].date(' Y', $this->date);

    }

    public static function getCommentsCurrentPost($id){
        return Comments::find()
            ->where(['post_id' => $id])
            ->all();
    }

    public static function getTwoLastPosts($id){
        return Comments::find()
            ->where(['post_id' => $id])
            ->orderBy(["id" => SORT_DESC])
            ->limit(2)
            ->all();
    }
}
?>