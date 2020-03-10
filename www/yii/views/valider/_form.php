<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Valider */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="valider-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_eleve')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_com')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_personnel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_valider')->textInput() ?>

    <?= $form->field($model, 'photo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
