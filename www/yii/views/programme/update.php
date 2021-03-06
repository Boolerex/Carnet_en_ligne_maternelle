<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Programme */

$this->title = 'Update Programme: ' . $model->Intitule;
$this->params['breadcrumbs'][] = ['label' => 'Programmes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Intitule, 'url' => ['view', 'id' => $model->Intitule]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="programme-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
