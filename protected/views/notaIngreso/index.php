<?php
/* @var $this NotaIngresoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nota de Ingreso',
);

$this->menu=array(
	array('label'=>'Nueva Nota de Ingreso', 'url'=>array('create')),
	array('label'=>'Admionistrar Nota de Ingreso', 'url'=>array('admin')),
);
?>

<h1>Nota de Ingreso</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
