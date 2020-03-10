<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\direction_classe */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="direction-classe-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_direction_classe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qualite')->textInput() ?>

    <?= $form->field($model, 'id_personnel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_debut')->textInput() ?>

    <?= $form->field($model, 'date_fin')->textInput() ?>

    <?= $form->field($model, 'id_classe')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
