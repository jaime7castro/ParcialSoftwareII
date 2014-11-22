<?php
/* @var $this CargoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cargo',
);

$this->menu=array(
	array('label'=>'Nuevo Cargo', 'url'=>array('create')),
	array('label'=>'Administrar Cargo', 'url'=>array('admin')),
);
?>

<h1>Gestionar Cargo</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
