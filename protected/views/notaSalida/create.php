<?php
/* @var $this NotaSalidaController */
/* @var $model NotaSalida */

$this->breadcrumbs=array(
	'Nota de Salida'=>array('index'),
	'Nueva',
);

$this->menu=array(
	array('label'=>'Listar Nota de Salida', 'url'=>array('index')),
	array('label'=>'Administrar Nota de Salida', 'url'=>array('admin')),
);
?>

<h1>Nueva Nota de Salida</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>