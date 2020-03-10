<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Valider */

$this->title = 'Update Valider: ' . $model->Id_eleve;
$this->params['breadcrumbs'][] = ['label' => 'Validers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_eleve, 'url' => ['view', 'Id_eleve' => $model->Id_eleve, 'id_com' => $model->id_com, 'id_personnel' => $model->id_personnel]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="valider-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
