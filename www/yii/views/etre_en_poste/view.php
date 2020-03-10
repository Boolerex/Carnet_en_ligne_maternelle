<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\etre_en_poste */

$this->title = $model->id_personnel;
$this->params['breadcrumbs'][] = ['label' => 'Etre En Postes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="etre-en-poste-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_personnel' => $model->id_personnel, 'annee_scolaire' => $model->annee_scolaire], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_personnel' => $model->id_personnel, 'annee_scolaire' => $model->annee_scolaire], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_personnel',
            'annee_scolaire',
            'qualite',
        ],
    ]) ?>

</div>
