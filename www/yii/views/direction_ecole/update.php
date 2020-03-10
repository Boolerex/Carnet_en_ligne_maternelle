<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\direction_ecole */

$this->title = 'Update Direction Ecole: ' . $model->id_direction_ecole;
$this->params['breadcrumbs'][] = ['label' => 'Direction Ecoles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_direction_ecole, 'url' => ['view', 'id' => $model->id_direction_ecole]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="direction-ecole-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
