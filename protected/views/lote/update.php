<?php
/* @var $this LoteController */
/* @var $model Lote */

$this->breadcrumbs=array(
	'Lote'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Lote', 'url'=>array('index')),
	array('label'=>'Nuevo Lote', 'url'=>array('create')),
	array('label'=>'Ver Lote', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Lote', 'url'=>array('admin')),
);
?>

<h1>Editar Lote <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>