<?php
/* @var $this FuncionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Funcion',
);

$this->menu=array(
	array('label'=>'Nueva Funcion', 'url'=>array('create')),
	array('label'=>'Administrar Funcion', 'url'=>array('admin')),
);
?>

<h1>Gestionar Funcion</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
