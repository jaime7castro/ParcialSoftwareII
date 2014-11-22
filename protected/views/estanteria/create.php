<?php
/* @var $this EstanteriaController */
/* @var $model Estanteria */

$this->breadcrumbs=array(
	'Estanteria'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Estanteria', 'url'=>array('index')),
	array('label'=>'Administrar Estanteria', 'url'=>array('admin')),
);
?>

<h1>Nueva Estanteria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>