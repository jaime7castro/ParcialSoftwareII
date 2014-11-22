<?php
/* @var $this FuncionController */
/* @var $model Funcion */

$this->breadcrumbs=array(
	'Funcion'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Funcion', 'url'=>array('index')),
	array('label'=>'Nueva Funcion', 'url'=>array('create')),
	array('label'=>'Editar Funcion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Funcion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Funcion', 'url'=>array('admin')),
);
?>

<h1>Ver Funcion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
	),
)); ?>
