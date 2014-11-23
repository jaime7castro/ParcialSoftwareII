<?php
/* @var $this PedidoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pedidos',
);

$this->menu=array(
	array('label'=>'Nuevo Pedido', 'url'=>array('create')),
	array('label'=>'Administrar Pedido', 'url'=>array('admin')),
);
?>

<h1>Registrar Pedidos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
