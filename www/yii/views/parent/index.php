<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\parentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Classems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classem-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Classem', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_parent',
            'nom_parent:ntext',
            'prenom_parent:ntext',
            'email_parent:email',
            'adresse_parent',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
