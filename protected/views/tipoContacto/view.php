<?php
/* @var $this TipoContactoController */
/* @var $model TipoContacto */

$this->breadcrumbs=array(
	'Tipo de Contactos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Tipo de Contacto', 'url'=>array('index')),
	array('label'=>'Nuevo Tipo de Contacto', 'url'=>array('create')),
	array('label'=>'Editar Tipo de Contacto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Tipo de Contacto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Tipo de Contacto', 'url'=>array('admin')),
);
?>

<h1>Ver Tipo de Contacto #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
	),
)); ?>
