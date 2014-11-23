<?php
/* @var $this NotaIngresoController */
/* @var $model NotaIngreso */

$this->breadcrumbs=array(
	'Nota de Ingreso'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Nota de Ingreso', 'url'=>array('index')),
	array('label'=>'Nueva Nota de Ingreso', 'url'=>array('create')),
	array('label'=>'Editar Nota de Ingreso', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Nota de Ingreso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Nota de Ingreso', 'url'=>array('admin')),
);
?>

<h1>Ver Nota de Ingreso #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'hora',
		'fecha',
		//'monto',
		array(
                  'label'=> 'Provedor_codigo',
                  'value'=>$model->provedorCodigo->razonSocial, 
                ),
	),
)); ?>
<?php echo CHtml::link(CHtml::encode('ingresar al DETALLE'), array('viewDNS', 'id'=>$model->id)); ?>
