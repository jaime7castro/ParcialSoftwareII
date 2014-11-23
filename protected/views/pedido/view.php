<?php
/* @var $this PedidoController */
/* @var $model Pedido */

$this->breadcrumbs=array(
	'Pedidos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Pedido', 'url'=>array('index')),
	array('label'=>'Nuevo Pedido', 'url'=>array('create')),
	array('label'=>'Editar Pedido', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Pedido', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Pedido', 'url'=>array('admin')),
);
?>

<h1>Ver Pedido #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'hora',
		'fecha',
                'Cliente_ci',
		array(
                  'label'=> 'Nombre del Cliente',
                  'value'=>$model->clienteCi->nombres." ".$model->clienteCi->apPat." ".$model->clienteCi->apMat, 
                ),
	),
)); ?>
