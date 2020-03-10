<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\inscriptionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inscription-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_inscription') ?>

    <?= $form->field($model, 'id_eleve') ?>

    <?= $form->field($model, 'id_classe') ?>

    <?= $form->field($model, 'intitule_section') ?>

    <?= $form->field($model, 'validite') ?>

    <?php // echo $form->field($model, 'date_operation') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
