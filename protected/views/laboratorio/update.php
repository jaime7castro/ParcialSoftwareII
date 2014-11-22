<?php
/* @var $this LaboratorioController */
/* @var $model Laboratorio */

$this->breadcrumbs=array(
	'Laboratorio'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Laboratorio', 'url'=>array('index')),
	array('label'=>'Nuevo Laboratorio', 'url'=>array('create')),
	array('label'=>'Ver Laboratorio', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Laboratorio', 'url'=>array('admin')),
);
?>

<h1>Editar Laboratorio <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>