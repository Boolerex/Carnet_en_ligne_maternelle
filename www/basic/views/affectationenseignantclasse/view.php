<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Affectationenseignantclasse */

$this->title = $model->classe;
$this->params['breadcrumbs'][] = ['label' => 'Affectationenseignantclasses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="affectationenseignantclasse-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'classe' => $model->classe, 'IdentifiantEnseignant' => $model->IdentifiantEnseignant], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'classe' => $model->classe, 'IdentifiantEnseignant' => $model->IdentifiantEnseignant], [
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
            'classe',
            'IdentifiantEnseignant',
            'AnneeScolaire',
        ],
    ]) ?>

</div>
