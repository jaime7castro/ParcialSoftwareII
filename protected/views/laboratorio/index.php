<?php
/* @var $this LaboratorioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Laboratorio',
);

$this->menu=array(
	array('label'=>'Nuevo Laboratorio', 'url'=>array('create')),
	array('label'=>'Administrar Laboratorio', 'url'=>array('admin')),
);
?>

<h1>Gestionar Laboratorio</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
