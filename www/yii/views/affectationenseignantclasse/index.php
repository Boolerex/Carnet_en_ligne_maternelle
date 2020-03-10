<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AffectationenseignantclasseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Affectation des enseignants à des classes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="affectationenseignantclasse-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Affectationenseignantclasse', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'classe',
            'IdentifiantEnseignant',
            'AnneeScolaire',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
