<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
<<<<<<< HEAD
//use app\models\personnel;
use app\models\User;
=======
use app\models\AddpostForm;
use app\models\Enseignant;
>>>>>>> 726ca6fe04c01f1685712982dd31e69b8bd215bd

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
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
<<<<<<< HEAD
    
       


{$model = new \app\models\User();
    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            // form inputs are valid, do something here
            return;
        }
    }

    return $this->render('index', [
        'model' => $model,
    ]);
 
 
 
 
 
 
 
 
 
 
 
    /*$model = new \app\models\personnel();

    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            // form inputs are valid, do something here
            return;
        }
    }

    return $this->render('personnel', [
        'model' => $model,
    ]);*/
=======
    {
        return $this->render('index');
>>>>>>> 726ca6fe04c01f1685712982dd31e69b8bd215bd
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
<<<<<<< HEAD
            return $this->goHome();
=======
            return $this->render('about');
>>>>>>> 726ca6fe04c01f1685712982dd31e69b8bd215bd
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
<<<<<<< HEAD
            return $this->goBack();
=======
            return $this->render('dire');
>>>>>>> 726ca6fe04c01f1685712982dd31e69b8bd215bd
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
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
<<<<<<< HEAD
=======
	
	public function actionEnseignant()
    {  
	    $model = new Enseignant();
		  if( $model->load(Yii::$app->request->post()) ){
            if( $model->save() ){
                return $this->refresh();
            }
        }

        return $this->render('enseignant', compact('model'));
       }

        
    
    
	
	public function actionDire($message = '')
    {
        return $this->render('dire', ['message' => $message]);
    }
	
	public function actionAddpost()
    {
        $model = new AddpostForm();

        if( $model->load(Yii::$app->request->post()) ){
            if( $model->save() ){
                return $this->refresh();
            }
        }

        return $this->render('add', compact('model'));
    }
>>>>>>> 726ca6fe04c01f1685712982dd31e69b8bd215bd
}
