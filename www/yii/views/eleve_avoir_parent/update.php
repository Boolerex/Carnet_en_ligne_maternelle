<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EleveAvoirParent */

$this->title = 'Update Eleve Avoir Parent: ' . $model->id_parent;
$this->params['breadcrumbs'][] = ['label' => 'Eleve Avoir Parents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_parent, 'url' => ['view', 'id_parent' => $model->id_parent, 'id_eleve' => $model->id_eleve]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="eleve-avoir-parent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
