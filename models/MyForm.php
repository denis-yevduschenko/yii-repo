<?php

namespace app\models;

use Yii;
use yii\base\Model;

class MyForm extends Model{
    public $name;
    public $email;
    public $file;

    public function rules()
    {
        return [
            [['name', 'email'], 'required', 'message' => 'Field is empty!'],
            ['email', 'email', 'message' => 'Wrong email!'],
            [['file'], 'file', 'extensions' => 'jpg, png']
        ];
    }
}

?>

