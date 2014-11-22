<?php
/* @var $this EstanteriaController */
/* @var $model Estanteria */

$this->breadcrumbs=array(
	'Estanteria'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'Listar Estanteria', 'url'=>array('index')),
	array('label'=>'Nuevo Estanteria', 'url'=>array('create')),
	array('label'=>'Editar Estanteria', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Eliminar Estanteria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Estanteria', 'url'=>array('admin')),
);
?>

<h1>Ver Estanteria #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'descripcion',
	),
)); ?>
