<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AffectationenseignantclasseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="affectationenseignantclasse-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'classe') ?>

    <?= $form->field($model, 'IdentifiantEnseignant') ?>

    <?= $form->field($model, 'AnneeScolaire') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
