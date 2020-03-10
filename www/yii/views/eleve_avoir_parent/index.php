<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\eleve_avoir_parentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Eleve Avoir Parents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eleve-avoir-parent-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Eleve Avoir Parent', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_parent',
            'id_eleve',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
