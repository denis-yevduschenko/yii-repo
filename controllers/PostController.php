<?php

namespace app\controllers;


use app\models\Posts;
use yii\web\NotFoundHttpException;

class PostController extends AppController{

    public function actionIndex(){
        $quantity = 6;
        $posts = Posts::find()
            ->select('id, title, img, intro_text')
            ->orderBy(["id" => SORT_DESC])
            ->limit($quantity)
            ->all();
        return $this->render('index', [
            'posts' => $posts,
            'quantity' => $quantity
        ]);
    }


    public function actionTest(){
        return $this->render('test');
    }

    public function actionArticle($id = 'null'){
        $post = Posts::findOne($id);
        if (!$post){
            throw new NotFoundHttpException('Article not found');
        }
        return $this->render('article', [
            'post' => $post
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

    public function actionCategory($category = 'all'){
        if($category == 'all'){
            $posts = Posts::find()
                ->orderBy(["id" => SORT_DESC])
                ->all();
        } else {
            $posts = Posts::find()
                ->where(['category' => $category])
                ->orderBy(["id" => SORT_DESC])
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