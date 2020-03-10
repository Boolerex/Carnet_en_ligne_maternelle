<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\personnel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personnel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_personnel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nom_personnel')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'prenom_personnel')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'email_personnel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telephone_personnel')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
