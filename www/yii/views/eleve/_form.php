<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\eleve */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eleve-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_eleve')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nom_eleve')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'prenom_eleve')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_naissance')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
