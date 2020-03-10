<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\eleveSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eleve-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_eleve') ?>

    <?= $form->field($model, 'nom_eleve') ?>

    <?= $form->field($model, 'prenom_eleve') ?>

    <?= $form->field($model, 'date_naissance') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
