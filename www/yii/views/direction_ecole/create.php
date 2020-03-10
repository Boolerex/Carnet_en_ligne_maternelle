<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\direction_ecole */

$this->title = 'Create Direction Ecole';
$this->params['breadcrumbs'][] = ['label' => 'Direction Ecoles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="direction-ecole-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
