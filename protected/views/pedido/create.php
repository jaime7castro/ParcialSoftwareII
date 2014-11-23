<?php
/* @var $this PedidoController */
/* @var $model Pedido */

$this->breadcrumbs=array(
	'Pedidos'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Pedido', 'url'=>array('index')),
	array('label'=>'Administrar Pedido', 'url'=>array('admin')),
);
?>

<h1>Nuevo Pedido</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>