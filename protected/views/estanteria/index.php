<?php
/* @var $this EstanteriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estanteria',
);

$this->menu=array(
	array('label'=>'Nueva Estanteria', 'url'=>array('create')),
	array('label'=>'Administrar Estanteria', 'url'=>array('admin')),
);
?>

<h1>Gestionar Estanteria</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
