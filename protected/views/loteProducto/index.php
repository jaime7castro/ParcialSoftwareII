<?php
/* @var $this LoteProductoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lote Producto',
);

$this->menu=array(
	array('label'=>'Tabla LoteProducto', 'url'=>array('admin')),
);
?>

<h1>Visualizar Lote Producto</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
