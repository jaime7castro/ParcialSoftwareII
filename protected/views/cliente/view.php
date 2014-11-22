<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->ci,
);

$this->menu=array(
	array('label'=>'Listar Cliente', 'url'=>array('index')),
	array('label'=>'Nuevo Cliente', 'url'=>array('create')),
	array('label'=>'Editar Cliente', 'url'=>array('update', 'id'=>$model->ci)),
	array('label'=>'Eliminar Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ci),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Cliente', 'url'=>array('admin')),
);
?>

<h1>Ver Cliente #<?php echo $model->ci; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ci',
		'nombres',
		'apPat',
		'apMat',
		'sexo',
		'fechaNac',
		'direccion',
	),
)); ?>
<?php echo CHtml::link(CHtml::encode('ingresar a CONTACTOS'), array('viewDCP', 'id'=>$model->ci));?>
