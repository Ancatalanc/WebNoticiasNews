<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Noticia */

$this->title = $model->Codigo_Noticia;
$this->params['breadcrumbs'][] = ['label' => 'Noticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->Codigo_Noticia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->Codigo_Noticia], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Está seguro/a que desea borrar esta noticia?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Titulo',
            'Codigo_Noticia',
            'Cuerpo:ntext',
            'Categoria',
            'Estado',
            'Fecha_creacion',
        ],
    ]) ?>

</div>
