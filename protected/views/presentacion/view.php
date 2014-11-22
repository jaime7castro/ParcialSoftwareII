<?php
/* @var $this PresentacionController */
/* @var $model Presentacion */

$this->breadcrumbs=array(
	'Presentacion'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Presentacion', 'url'=>array('index')),
	array('label'=>'Nueva Presentacion', 'url'=>array('create')),
	array('label'=>'Editar Presentacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Presentacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administar Presentacion', 'url'=>array('admin')),
);
?>

<h1>Ver Presentacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
	),
)); ?>
