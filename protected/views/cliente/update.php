<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->ci=>array('view','id'=>$model->ci),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Cliente', 'url'=>array('index')),
	array('label'=>'Nuevo Cliente', 'url'=>array('create')),
	array('label'=>'Ver Cliente', 'url'=>array('view', 'id'=>$model->ci)),
	array('label'=>'Administrar Cliente', 'url'=>array('admin')),
);
?>

<h1>Editar Cliente <?php echo $model->ci; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>