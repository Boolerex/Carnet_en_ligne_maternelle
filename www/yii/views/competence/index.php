<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\competenceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Competences';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="competence-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Competence', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_com',
            'champ1',
            'champ2',
            'champ3',
            'nom_competence:ntext',
            //'intitule_section',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
