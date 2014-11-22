<?php
/* @var $this PresentacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Presentacion',
);

$this->menu=array(
	array('label'=>'Nueva Presentacion', 'url'=>array('create')),
	array('label'=>'Administrar Presentacion', 'url'=>array('admin')),
);
?>

<h1>Gestionar Presentacion</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
