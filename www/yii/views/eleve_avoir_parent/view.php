<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EleveAvoirParent */

$this->title = $model->id_parent;
$this->params['breadcrumbs'][] = ['label' => 'Eleve Avoir Parents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="eleve-avoir-parent-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_parent' => $model->id_parent, 'id_eleve' => $model->id_eleve], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_parent' => $model->id_parent, 'id_eleve' => $model->id_eleve], [
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
            'id_parent',
            'id_eleve',
        ],
    ]) ?>

</div>
