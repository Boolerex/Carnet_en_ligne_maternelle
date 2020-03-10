<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EleveAvoirParent */

$this->title = 'Create Eleve Avoir Parent';
$this->params['breadcrumbs'][] = ['label' => 'Eleve Avoir Parents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eleve-avoir-parent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
