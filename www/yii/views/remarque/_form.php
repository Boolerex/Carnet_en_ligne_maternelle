<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Remarque */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="remarque-form">

    <?php $form = ActiveForm::begin(); ?>

   

    <?= $form->field($model, 'IDCarnet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IntituleProgramme')->textInput(['maxlength' => true]) ?>
     <?= $form->field($model, 'Remarque')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
