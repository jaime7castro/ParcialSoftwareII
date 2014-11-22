<?php
/* @var $this ProvedorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Provedor',
);

$this->menu=array(
	array('label'=>'Nuevo Provedor', 'url'=>array('create')),
	array('label'=>'Administrar Provedor', 'url'=>array('admin')),
);
?>

<h1>Gestionar Provedor</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
