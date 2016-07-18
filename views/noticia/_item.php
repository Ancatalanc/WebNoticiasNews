
<?php
use yii\helpers\Html;
?>  

<h2><?=$model->Titulo;?> </h2>
<br></br>
<?=$model->Cuerpo;?> 
<br></br>

<?= Html::a(Html::encode($model->Codigo_Noticia), ['view', 'id' => $model->Codigo_Noticia], ['class' => 'btn btn-info']);?>


<h1>____________________________________________</h1>





