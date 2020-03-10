<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\etre_en_poste */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="etre-en-poste-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_personnel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'annee_scolaire')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qualite')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
