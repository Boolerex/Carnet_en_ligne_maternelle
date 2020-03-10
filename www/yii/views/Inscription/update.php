<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\inscription */

$this->title = 'Update Inscription: ' . $model->id_inscription;
$this->params['breadcrumbs'][] = ['label' => 'Inscriptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_inscription, 'url' => ['view', 'id' => $model->id_inscription]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inscription-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
