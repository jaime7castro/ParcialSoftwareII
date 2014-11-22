<?php
/* @var $this FuncionController */
/* @var $model Funcion */

$this->breadcrumbs=array(
	'Funcion'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Funcion', 'url'=>array('index')),
	array('label'=>'Nueva Funcion', 'url'=>array('create')),
	array('label'=>'Ver Funcion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Funcion', 'url'=>array('admin')),
);
?>

<h1>Editar Funcion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>