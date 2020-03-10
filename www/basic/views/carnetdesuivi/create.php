<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Carnetdesuivi */

$this->title = 'Creer un Carnet de suivi';
$this->params['breadcrumbs'][] = ['label' => 'Carnet de suivis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carnetdesuivi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
