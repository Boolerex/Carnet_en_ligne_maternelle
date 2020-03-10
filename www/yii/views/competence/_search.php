<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\competenceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="competence-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_com') ?>

    <?= $form->field($model, 'champ1') ?>

    <?= $form->field($model, 'champ2') ?>

    <?= $form->field($model, 'champ3') ?>

    <?= $form->field($model, 'nom_competence') ?>

    <?php // echo $form->field($model, 'intitule_section') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
