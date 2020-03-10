<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\classem */

$this->title = 'Create Classem';
$this->params['breadcrumbs'][] = ['label' => 'Classems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
