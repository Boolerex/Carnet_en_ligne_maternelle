<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\classem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_parent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nom_parent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'prenom_parent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'email_parent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adresse_parent')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
