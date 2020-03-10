<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\personnelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Personnels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personnel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Personnel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_personnel',
            'nom_personnel:ntext',
            'prenom_personnel:ntext',
            'email_personnel:email',
            'telephone_personnel',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
