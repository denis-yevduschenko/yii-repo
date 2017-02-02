<?php

namespace app\controllers;


use app\models\LoginForm;
use app\models\Posts;
use app\models\RegisterForm;
use Yii;
use yii\helpers\Html;
use yii\web\NotFoundHttpException;

class PostController extends AppController{

    public function actionIndex(){
        $quantity = 6;
        $posts = Posts::find()
            ->select('id, title, img, intro_text')
            ->where(['hide' => 0])
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

    public function actionLogin(){
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        $regModel = new RegisterForm();

        if ($regModel->load(Yii::$app->request->post()) && $regModel->validate()){
            $last_name = Html::encode($regModel->last_name);
            $first_name = Html::encode($regModel->first_name);
            $username = Html::encode($regModel->username);
            $email = Html::encode($regModel->email);
            $password = md5(Html::encode($regModel->password));
            return $this->render('successRegistration', [
                'last_name' => $last_name,
                'first_name' => $first_name,
                'username' => $username,
                'email' => $email,
                'password' => $password,
            ]);
        } else {
            $last_name = '';
            $first_name = '';
            $username = '';
            $email = '';
            $password = '';
        }
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
            'regModel' => $regModel,
        ]);
    }
}