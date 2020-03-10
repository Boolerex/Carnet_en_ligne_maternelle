<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProgrammeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Programmes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programme-index">
     <div> Vous pouvez Creer , Modifier et Supprimer des programmes<div/>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
	  
        <?= Html::a('Create Programme', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Intitule',
            'Description',
            'Intitulesousdomaine',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	
	<button style='width:100px; font-size:20px;'> <a href='http://localhost:8888/index.php?r=site/dire&message=Hello+mmmmmmmm'>Retour</a></button>
</div>
