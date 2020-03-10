<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\direction_classe */

$this->title = 'Create Direction Classe';
$this->params['breadcrumbs'][] = ['label' => 'Direction Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="direction-classe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
