<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\direction_ecole */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="direction-ecole-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_direction_ecole')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qualite')->textInput() ?>

    <?= $form->field($model, 'id_personnel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_debut')->textInput() ?>

    <?= $form->field($model, 'date_fin')->textInput() ?>

    <?= $form->field($model, 'id_annee_scolaire')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
