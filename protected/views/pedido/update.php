<?php
/* @var $this PedidoController */
/* @var $model Pedido */

$this->breadcrumbs=array(
	'Pedidos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Pedido', 'url'=>array('index')),
	array('label'=>'Nuevo Pedido', 'url'=>array('create')),
	array('label'=>'Ver Pedido', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Pedido', 'url'=>array('admin')),
);
?>

<h1>Editar Pedido <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>