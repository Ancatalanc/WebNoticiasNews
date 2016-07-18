<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Noticia */

$this->title = 'Update Noticia: ' . $model->Codigo_Noticia;
$this->params['breadcrumbs'][] = ['label' => 'Noticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Codigo_Noticia, 'url' => ['view', 'id' => $model->Codigo_Noticia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="noticia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
