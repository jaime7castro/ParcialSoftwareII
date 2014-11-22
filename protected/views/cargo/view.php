<?php
/* @var $this CargoController */
/* @var $model Cargo */

$this->breadcrumbs=array(
	'Cargo'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Cargo', 'url'=>array('index')),
	array('label'=>'Nuevo Cargo', 'url'=>array('create')),
	array('label'=>'Editar Cargo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Cargo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Cargo', 'url'=>array('admin')),
);
?>

<h1>Ver Cargo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
	),
)); ?>
