<?php
/* @var $this ProvedorController */
/* @var $model Provedor */

$this->breadcrumbs=array(
	'Provedors'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Provedor', 'url'=>array('index')),
	array('label'=>'Administrar Provedor', 'url'=>array('admin')),
);
?>

<h1>Nuevo Provedor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>