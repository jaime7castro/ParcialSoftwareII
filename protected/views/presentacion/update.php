<?php
/* @var $this PresentacionController */
/* @var $model Presentacion */

$this->breadcrumbs=array(
	'Presentacion'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Presentacion', 'url'=>array('index')),
	array('label'=>'Nueva Presentacion', 'url'=>array('create')),
	array('label'=>'Ver Presentacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Presentacion', 'url'=>array('admin')),
);
?>

<h1>Editar Presentacion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>