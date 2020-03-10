<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Ecole2020;


class Ecole2020Controller extends Controller
{
    public function actionIndex()
    {
        $query = Ecole2020::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('valider')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'ecole2020' => $countries,
            'pagination' => $pagination,
        ]);
    }
}