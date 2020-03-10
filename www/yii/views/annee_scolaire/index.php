<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\annee_scolaireSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Annee Scolaires';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="annee-scolaire-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Annee Scolaire', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'annee_scolaire',
            'debut',
            'fin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
