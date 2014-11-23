<?php
/* @var $this LoteController */
/* @var $model Lote */

$this->breadcrumbs=array(
	'Lote'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Lote', 'url'=>array('index')),
	array('label'=>'Administrar Lote', 'url'=>array('admin')),
);
?>

<h1>Nuevo Lote</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>