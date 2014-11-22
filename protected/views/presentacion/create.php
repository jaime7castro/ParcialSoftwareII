<?php
/* @var $this PresentacionController */
/* @var $model Presentacion */

$this->breadcrumbs=array(
	'Presentacion'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Presentacion', 'url'=>array('index')),
	array('label'=>'Administrar Presentacion', 'url'=>array('admin')),
);
?>

<h1>Nueva Presentacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>