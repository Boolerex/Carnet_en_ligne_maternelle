<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\AddpostForm;

class MineController extends Controller
{
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
}