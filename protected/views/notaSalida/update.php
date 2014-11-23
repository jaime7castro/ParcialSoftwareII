<?php
/* @var $this NotaSalidaController */
/* @var $model NotaSalida */

$this->breadcrumbs=array(
	'Nota de Salida'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Nota de Salida', 'url'=>array('index')),
	array('label'=>'Nueva Nota de Salida', 'url'=>array('create')),
	array('label'=>'Ver Nota de Salida', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Nota de Salida', 'url'=>array('admin')),
);
?>

<h1>Editar Nota de Salida <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>