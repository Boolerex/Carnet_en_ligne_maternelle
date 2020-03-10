<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CarnetdesuiviSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carnet de suivi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carnetdesuivi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Carnetdesuivi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'IdCarnet',
            'Annee',
            'IDEeleve',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	<button style='width:150px; font-size:20px;'> <a href='http://localhost:8888/index.php?r=remarque/index'>Evaluation</a></button>
	<button style='width:100px; font-size:20px;'> <a href='http://localhost:8888/index.php?r=site/dire&message=Hello+mmmmmmmm'>Retour</a></button>

</div>
