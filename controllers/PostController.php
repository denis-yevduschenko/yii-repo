<?php

namespace app\controllers;


use app\models\Posts;
use yii\web\NotFoundHttpException;

class PostController extends AppController{

    public function actionIndex(){
        $posts = Posts::find()
            ->select('id, title, img, intro_text')
            ->orderBy(["id" => SORT_DESC])
            ->limit(3)
            ->all();
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

    public function actionCategories(){
        $categories = Posts::find()
            ->select('category')
            ->groupBy('category')
            ->all();
        if(!empty($categories)){
            return $this->render('categories', [
                'categories' => $categories
            ]);
        } else{
            throw new NotFoundHttpException('Page not found');
        }
    }

    public function actionCategory($category = 'All'){
        if($category == 'All'){
            $posts = Posts::find()
                ->select('category')
                ->all();
        } else {
            $posts = Posts::find()
                ->select('category')
                ->where(['category' => $category])
                ->all();
        }
        if(!empty($posts)){
            return $this->render('category', [
                'posts' => $posts,
                'category' => $category
            ]);
        } else {
            throw new NotFoundHttpException('Category not found');
        }
    }
}