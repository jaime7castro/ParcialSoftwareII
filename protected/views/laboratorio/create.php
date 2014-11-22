<?php
/* @var $this LaboratorioController */
/* @var $model Laboratorio */

$this->breadcrumbs=array(
	'Laboratorio'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Laboratorio', 'url'=>array('index')),
	array('label'=>'Administrar Laboratorio', 'url'=>array('admin')),
);
?>

<h1>Nuevo Laboratorio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>