<?php
/* @var $this ProvedorController */
/* @var $model Provedor */

$this->breadcrumbs=array(
	'Provedor'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'Listar Provedor', 'url'=>array('index')),
	array('label'=>'Nuevo Provedor', 'url'=>array('create')),
	array('label'=>'Editar Provedor', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Eliminar Provedor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Provedor', 'url'=>array('admin')),
);
?>

<h1>Ver Provedor #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'nitRuc',
		'razonSocial',
		'direccion',
	),
)); ?>
<?php echo CHtml::link(CHtml::encode('ingresar a CONTACTOS'), array('viewDCP', 'id'=>$model->codigo));?>
