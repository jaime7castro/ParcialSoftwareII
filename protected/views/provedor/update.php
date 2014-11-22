<?php
/* @var $this ProvedorController */
/* @var $model Provedor */

$this->breadcrumbs=array(
	'Provedor'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Provedor', 'url'=>array('index')),
	array('label'=>'Nuevo Provedor', 'url'=>array('create')),
	array('label'=>'Ver Provedor', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Administrar Provedor', 'url'=>array('admin')),
);
?>

<h1>Editar Provedor <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>