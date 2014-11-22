<?php
/* @var $this EstanteriaController */
/* @var $model Estanteria */

$this->breadcrumbs=array(
	'Estanteria'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Estanteria', 'url'=>array('index')),
	array('label'=>'Nueva Estanteria', 'url'=>array('create')),
	array('label'=>'Ver Estanteria', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Administrar Estanteria', 'url'=>array('admin')),
);
?>

<h1>Editar Estanteria <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>