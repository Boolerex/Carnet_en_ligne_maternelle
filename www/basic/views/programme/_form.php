<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Programme */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programme-form">
     <div> vous pouvez creer , modifier et supprimer des programmes<div/>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Intitule')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Intitulesousdomaine')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
