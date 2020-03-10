<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\eleve */

$this->title = 'Update Eleve: ' . $model->id_eleve;
$this->params['breadcrumbs'][] = ['label' => 'Eleves', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_eleve, 'url' => ['view', 'id' => $model->id_eleve]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="eleve-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
