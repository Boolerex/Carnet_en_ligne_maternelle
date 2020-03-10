<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\etre_en_poste */

$this->title = 'Create Etre En Poste';
$this->params['breadcrumbs'][] = ['label' => 'Etre En Postes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etre-en-poste-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
