<?php

namespace app\controllers;

use yii\web\Controller;
use yii\web\Controller;
use yii\web\Controller;

class Ecole2020Controller extends Controller
{

    public function actionIndex()
    {
		$query = Ecole2020 :: find();
		$pagination = new pagination ([
		'defaultPageSize ' => 5
		' totalCount' => $ query -> count(),
		]);
		
		$ countries = $ query -> orderBy ( 'valider')
		-> offset ($pagination -> offset )
		-> limit ($pagination ->limit)
		-> all();
		
		return $this-> render ('index , [ 
		'ecole2020' => $countries,
		'pagination'=>$pagination,
		]);
	}
}
		
		
		
		
        return [