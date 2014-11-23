<?php
/* @var $this NotaIngresoController */
/* @var $model NotaIngreso */

$this->breadcrumbs=array(
	'Nota de Ingreso'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Nota de Ingreso', 'url'=>array('index')),
	array('label'=>'Nueva Nota de Ingreso', 'url'=>array('create')),
	array('label'=>'Ver Nota de Ingreso', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Nota de Ingreso', 'url'=>array('admin')),
);
?>

<h1>Editar Nota de Ingreso <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>