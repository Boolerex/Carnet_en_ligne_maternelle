<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Valider */

$this->title = $model->Id_eleve;
$this->params['breadcrumbs'][] = ['label' => 'Validers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="valider-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_eleve' => $model->Id_eleve, 'id_com' => $model->id_com, 'id_personnel' => $model->id_personnel], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_eleve' => $model->Id_eleve, 'id_com' => $model->id_com, 'id_personnel' => $model->id_personnel], [
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
            'Id_eleve',
            'id_com',
            'id_personnel',
            'date_valider',
            'photo',
        ],
    ]) ?>

</div>
