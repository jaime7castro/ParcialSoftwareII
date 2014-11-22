<?php
/* @var $this FuncionController */
/* @var $model Funcion */

$this->breadcrumbs=array(
	'Funcions'=>array('index'),
	'Nueva',
);

$this->menu=array(
	array('label'=>'Listar Funcion', 'url'=>array('index')),
	array('label'=>'Administrar Funcion', 'url'=>array('admin')),
);
?>

<h1>Nueva Funcion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>