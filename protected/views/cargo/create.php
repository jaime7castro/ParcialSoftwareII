<?php
/* @var $this CargoController */
/* @var $model Cargo */

$this->breadcrumbs=array(
	'Cargo'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Cargo', 'url'=>array('index')),
	array('label'=>'Administar Cargo', 'url'=>array('admin')),
);
?>

<h1>Nuevo Cargo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>