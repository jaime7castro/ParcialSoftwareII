<?php
/* @var $this NotaIngresoController */
/* @var $model NotaIngreso */

$this->breadcrumbs=array(
	'Nota de Ingreso'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Nota de Ingreso', 'url'=>array('index')),
	array('label'=>'Administrar Nota de Ingreso', 'url'=>array('admin')),
);
?>

<h1>Nueva Nota de Ingreso</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>