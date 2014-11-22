<?php
/* @var $this ClienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cliente',
);

$this->menu=array(
	array('label'=>'Nuevo Cliente', 'url'=>array('create')),
	array('label'=>'Administrar Cliente', 'url'=>array('admin')),
);
?>

<h1>Gestionar Clientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
