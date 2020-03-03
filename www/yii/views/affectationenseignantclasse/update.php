<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Affectationenseignantclasse */

$this->title = 'Update Affectationenseignantclasse: ' . $model->classe;
$this->params['breadcrumbs'][] = ['label' => 'Affectationenseignantclasses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->classe, 'url' => ['view', 'classe' => $model->classe, 'IdentifiantEnseignant' => $model->IdentifiantEnseignant]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="affectationenseignantclasse-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
