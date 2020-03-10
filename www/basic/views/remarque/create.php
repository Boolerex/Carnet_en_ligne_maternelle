<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Remarque */

$this->title = 'Create Remarque';
$this->params['breadcrumbs'][] = ['label' => 'Remarques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="remarque-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
<button style='width:100px; font-size:20px;'> <a href='http://localhost:8888/index.php?r=remarque/index'>Retour</a></button>
</div>
