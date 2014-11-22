<?php
/* @var $this TipoContactoController */
/* @var $model TipoContacto */

$this->breadcrumbs=array(
	'Tipo de Contactos'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Tipo de Contacto', 'url'=>array('index')),
	array('label'=>'Administrar Tipo de Contacto', 'url'=>array('admin')),
);
?>

<h1>Nuevo Tipo de Contacto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>