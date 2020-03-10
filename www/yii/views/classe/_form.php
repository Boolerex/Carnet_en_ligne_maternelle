<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\classe */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classe-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_classe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nom_classe')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'annee_scolaire')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
