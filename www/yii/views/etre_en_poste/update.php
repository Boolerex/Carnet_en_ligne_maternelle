<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\etre_en_poste */

$this->title = 'Update Etre En Poste: ' . $model->id_personnel;
$this->params['breadcrumbs'][] = ['label' => 'Etre En Postes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_personnel, 'url' => ['view', 'id_personnel' => $model->id_personnel, 'annee_scolaire' => $model->annee_scolaire]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="etre-en-poste-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
