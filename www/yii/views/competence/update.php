<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\competence */

$this->title = 'Update Competence: ' . $model->id_com;
$this->params['breadcrumbs'][] = ['label' => 'Competences', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_com, 'url' => ['view', 'id' => $model->id_com]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="competence-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
