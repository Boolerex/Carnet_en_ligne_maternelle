<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RemarqueSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Evaluation';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="remarque-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Remarque', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Remarque',
            'IDCarnet',
            'IntituleProgramme',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	<button style='width:300px; font-size:20px;'> <a href='http://localhost:8888/index.php?r=remarque/create'>Ajouter une evaluation</a></button>
	<button style='width:100px; font-size:20px;'> <a href='http://localhost:8888/index.php?r=site/dire&message=Hello+mmmmmmmm'>Retour</a></button>
	
</div>
