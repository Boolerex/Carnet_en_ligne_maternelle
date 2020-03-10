<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\direction_classe */

$this->title = 'Update Direction Classe: ' . $model->id_direction_classe;
$this->params['breadcrumbs'][] = ['label' => 'Direction Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_direction_classe, 'url' => ['view', 'id' => $model->id_direction_classe]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="direction-classe-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
