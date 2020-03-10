<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Carnetdesuivi */

$this->title = 'Update Carnetdesuivi: ' . $model->IdCarnet;
$this->params['breadcrumbs'][] = ['label' => 'Carnetdesuivis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdCarnet, 'url' => ['view', 'id' => $model->IdCarnet]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carnetdesuivi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
