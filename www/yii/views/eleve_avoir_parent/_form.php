<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EleveAvoirParent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eleve-avoir-parent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_parent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_eleve')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
