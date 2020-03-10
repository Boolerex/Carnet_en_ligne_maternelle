<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\direction_classeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="direction-classe-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_direction_classe') ?>

    <?= $form->field($model, 'qualite') ?>

    <?= $form->field($model, 'id_personnel') ?>

    <?= $form->field($model, 'date_debut') ?>

    <?= $form->field($model, 'date_fin') ?>

    <?php // echo $form->field($model, 'id_classe') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
