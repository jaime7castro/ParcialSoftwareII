<?php
/* @var $this TipoContactoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo de Contactos',
);

$this->menu=array(
	array('label'=>'Nuevo Tipo de Contacto', 'url'=>array('create')),
	array('label'=>'Administrar Tipo de Contacto', 'url'=>array('admin')),
);
?>

<h1>Gestionar Tipo de Contacto</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
