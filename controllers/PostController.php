<?php

namespace app\controllers;


use app\models\Posts;

class PostController extends AppController{

    public function actionIndex(){
        $posts = Posts::find()->all();
        return $this->render('index', [
            'posts' => $posts
        ]);
    }


    public function actionTest(){
        return $this->render('test');
    }
}