<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AnneeScolaire */

$this->title = 'Update Annee Scolaire: ' . $model->annee_scolaire;
$this->params['breadcrumbs'][] = ['label' => 'Annee Scolaires', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->annee_scolaire, 'url' => ['view', 'id' => $model->annee_scolaire]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="annee-scolaire-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
