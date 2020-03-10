<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\validerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Validers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="valider-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Valider', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_eleve',
            'id_com',
            'id_personnel',
            'date_valider',
            'photo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
