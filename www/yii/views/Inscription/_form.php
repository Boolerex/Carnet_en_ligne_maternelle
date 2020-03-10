<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\inscription */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inscription-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_inscription')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_eleve')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_classe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intitule_section')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'validite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_operation')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
