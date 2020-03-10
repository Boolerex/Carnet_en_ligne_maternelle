<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\direction_ecoleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="direction-ecole-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_direction_ecole') ?>

    <?= $form->field($model, 'qualite') ?>

    <?= $form->field($model, 'id_personnel') ?>

    <?= $form->field($model, 'date_debut') ?>

    <?= $form->field($model, 'date_fin') ?>

    <?php // echo $form->field($model, 'id_annee_scolaire') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
