<?php

namespace app\controllers;


use app\models\Posts;

class PostController extends AppController{

    public function actionIndex(){
        $posts = Posts::find()->select('id, title, img, intro_text')->limit(3)->all();
        return $this->render('index', [
            'posts' => $posts
        ]);
    }


    public function actionTest(){
        return $this->render('test');
    }

    public function actionArticle($id = 'null'){
        return $this->render('article', [
            'id' => $id
        ]);
    }
}