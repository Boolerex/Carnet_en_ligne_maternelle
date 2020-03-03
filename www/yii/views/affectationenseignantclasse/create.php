<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Affectationenseignantclasse */

$this->title = 'Creer une Affectation d\'un enseignant à une classe';
$this->params['breadcrumbs'][] = ['label' => 'Affectationenseignantclasses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="affectationenseignantclasse-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
