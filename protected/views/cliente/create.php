<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Cliente', 'url'=>array('index')),
	array('label'=>'Administrar Cliente', 'url'=>array('admin')),
);
?>

<h1>Nuevo Cliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>