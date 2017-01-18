<?php

namespace app\controllers;

use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Cookie;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use yii\helpers\Html;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\MyForm;
use app\models\Comments;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays text "Hello World!".
     *
     * @return string
     */
    public function actionHello($message = "Hello World!"){
        return $this->render('hello',
            ['message' => $message]
        );
    }

    public function actionForm(){
        $form = new MyForm();
        if ($form->load(Yii::$app->request->post()) && $form->validate()){
            $name = Html::encode($form->name);
            $email = Html::encode($form->email);
            $form->file = UploadedFile::getInstance($form, 'file');
            $form->file->saveAs('photo/'.$form->file->baseName.'.'.$form->file->extension);
        } else {
            $name = '';
            $email = '';
        }
        return $this->render('form',
            ['form' => $form,
            'name' => $name,
            'email' => $email
            ]
        );
    }

    public function actionComments(){
        $comments = Comments::find();

        $pagination = new Pagination([
            'defaultPageSize' => '2',
            'totalCount' => $comments->count()
        ]);

        $comments = $comments->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $cookies = Yii::$app->request->cookies;

        return $this->render('comments', [
            'comments' => $comments,
            'pagination' => $pagination,
            'name' => $cookies->getValue('name')
        ]);
    }

    public function actionUser(){
        $name = Yii::$app->request->get("name", "Guest");

        $session = Yii::$app->session;
        $cookies = Yii::$app->response->cookies;

        $session->set('name', $name);
        $cookies->add(new Cookie([
            'name' => 'name',
            'value' => $name
        ]));

        return $this->render('user', [
            'name' => $name
        ]);
    }
}
