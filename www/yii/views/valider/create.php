<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Valider */

$this->title = 'Create Valider';
$this->params['breadcrumbs'][] = ['label' => 'Validers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="valider-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
