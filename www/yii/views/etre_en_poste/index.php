<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\etre_en_posteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Etre En Postes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etre-en-poste-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Etre En Poste', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_personnel',
            'annee_scolaire',
            'qualite',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
