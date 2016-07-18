<?php

use yii\helpers\html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model,'titulo'); ?>
<?= $form->field($model,'cuerpo'); ?>
<?= $form->field($model,'categoria'); ?>
<?= $form->field($model,'estado'); ?>

<?= html::submitButton('Guardar',['class'=>'btn btn-success']); ?>