<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\competence */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="competence-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_com')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'champ1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'champ2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'champ3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nom_competence')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'intitule_section')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
