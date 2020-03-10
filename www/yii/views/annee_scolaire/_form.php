<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnneeScolaire */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="annee-scolaire-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'annee_scolaire')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'debut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fin')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
