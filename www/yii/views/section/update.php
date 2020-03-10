<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\section */

$this->title = 'Update Section: ' . $model->intitule_section;
$this->params['breadcrumbs'][] = ['label' => 'Sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->intitule_section, 'url' => ['view', 'id' => $model->intitule_section]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="section-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
