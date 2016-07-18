<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NoticiaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="noticia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Titulo') ?>

    <?= $form->field($model, 'Codigo_Noticia') ?>

    <?php // echo $form->field($model, 'Cuerpo') ?>

    <?php // echo $form->field($model, 'Categoria') ?>

    <?php // echo $form->field($model, 'Estado') ?>

    <?php // echo $form->field($model, 'Fecha_creacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
