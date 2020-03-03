<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Enseignant */
/* @var $form ActiveForm */
?>
<div class="enseignant">

    <?php $form = ActiveForm::begin(); ?>

       <?= $form->field($model, 'Identifiant') ?>
        <?= $form->field($model, 'Nom') ?>
        <?= $form->field($model, 'Prenom') ?>
        <?= $form->field($model, 'TEL') ?>
        <?= $form->field($model, 'Email') ?>
        <?= $form->field($model, 'MotDePasse') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- enseignant -->
