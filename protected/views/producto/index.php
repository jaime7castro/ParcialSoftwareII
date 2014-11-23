<?php
/* @var $this ProductoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Producto',
);

$this->menu=array(
	array('label'=>'Nuevo Producto', 'url'=>array('create')),
	array('label'=>'Administrar Producto', 'url'=>array('admin')),
);
?>

<h1>Administrar Productos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
