<?php
/* @var $this LaboratorioController */
/* @var $model Laboratorio */

$this->breadcrumbs=array(
	'Laboratorio'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Laboratorio', 'url'=>array('index')),
	array('label'=>'Nuevo Laboratorio', 'url'=>array('create')),
	array('label'=>'Editar Laboratorio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Laboratorio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Laboratorio', 'url'=>array('admin')),
);
?>

<h1>Ver Laboratorio #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
	),
)); ?>
