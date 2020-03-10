<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Remarque */

$this->title = 'Update Remarque: ' . $model->IDCarnet;
$this->params['breadcrumbs'][] = ['label' => 'Remarques', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDCarnet, 'url' => ['view', 'IDCarnet' => $model->IDCarnet, 'IntituleProgramme' => $model->IntituleProgramme]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="remarque-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
