<?php
/* @var $this LoteController */
/* @var $model Lote */

$this->breadcrumbs=array(
	'Lote'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Lote', 'url'=>array('index')),
	array('label'=>'Nuevo Lote', 'url'=>array('create')),
	array('label'=>'Editar Lote', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Lote', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Lote', 'url'=>array('admin')),
);
?>

<h1>Ver Lote #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'identidicador',
		'precio',
		'cantidadInicial',
		'fechaVencimiento',
                array(
                  'label'=> 'Producto_codigo',
                  'value'=>$model->productoCodigo->descripcion, 
                ),
	),
)); ?>
