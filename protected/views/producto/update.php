<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Producto'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Producto', 'url'=>array('index')),
	array('label'=>'Nuevo Producto', 'url'=>array('create')),
	array('label'=>'Ver Producto', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Administrar Producto', 'url'=>array('admin')),
);
?>

<h1>Editar Producto <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>