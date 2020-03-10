<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\classem */

$this->title = 'Update Classem: ' . $model->id_parent;
$this->params['breadcrumbs'][] = ['label' => 'Classems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_parent, 'url' => ['view', 'id' => $model->id_parent]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="classem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
