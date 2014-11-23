<?php
/* @var $this NotaSalidaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nota Salidas',
);

$this->menu=array(
	array('label'=>'Nueva Nota de Salida', 'url'=>array('create')),
	array('label'=>'Administrar Nota de Salida', 'url'=>array('admin')),
);
?>

<h1>Realizar Nota de Salida</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
