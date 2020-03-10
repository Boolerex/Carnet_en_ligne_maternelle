<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Remarque */

$this->title = $model->IDCarnet;
$this->params['breadcrumbs'][] = ['label' => 'Remarques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="remarque-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IDCarnet' => $model->IDCarnet, 'IntituleProgramme' => $model->IntituleProgramme], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IDCarnet' => $model->IDCarnet, 'IntituleProgramme' => $model->IntituleProgramme], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            'IDCarnet',
            'IntituleProgramme',
			'Remarque',
        ],
    ]) ?>

</div>
