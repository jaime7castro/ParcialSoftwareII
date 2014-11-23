<?php
/* @var $this NotaSalidaController */
/* @var $model NotaSalida */

$this->breadcrumbs=array(
	'Nota de Salida'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Nota de Salida', 'url'=>array('index')),
	array('label'=>'Nueva Nota de Salida', 'url'=>array('create')),
	array('label'=>'Editar Nota de Salida', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Nota de Salida', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Nota de Salida', 'url'=>array('admin')),
);
?>

<h1>View NotaSalida #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'hora',
		'fecha',
		'Usuario_codigo',
	),
)); ?>
<?php echo CHtml::link(CHtml::encode('ingresar al DETALLE'), array('viewDNS', 'id'=>$model->id)); ?>
