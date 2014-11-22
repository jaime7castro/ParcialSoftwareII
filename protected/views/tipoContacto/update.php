<?php
/* @var $this TipoContactoController */
/* @var $model TipoContacto */

$this->breadcrumbs=array(
	'Tipo de Contactos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Tipo de Contacto', 'url'=>array('index')),
	array('label'=>'Nuevo Tipo de Contacto', 'url'=>array('create')),
	array('label'=>'Ver Tipo de Contacto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Tipo de Contacto', 'url'=>array('admin')),
);
?>

<h1>Editar Tipo de Contacto <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>