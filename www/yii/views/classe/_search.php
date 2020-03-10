<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\classeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classe-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_classe') ?>

    <?= $form->field($model, 'nom_classe') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'salle') ?>

    <?= $form->field($model, 'annee_scolaire') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
