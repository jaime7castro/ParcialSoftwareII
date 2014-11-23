<?php
/* @var $this LoteProductoController */
/* @var $model LoteProducto */

$this->breadcrumbs=array(
	'Lote Producto'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar LoteProducto', 'url'=>array('index')),
	array('label'=>'Tabla LoteProducto', 'url'=>array('admin')),
);
?>

<h1>View LoteProducto #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'Lote_id',
                array(
                  'label'=> 'Lote_id',
                  'value'=>$model->lote->identidicador, 
                ),
		'id',
		'cantidadActual',
		'precioCompra',
                 array(
                  'label'=> 'Producto_codigo',
                  'value'=>$model->productoCodigo->descripcion, 
                ),
		//'Producto_codigo',
	),
)); ?>
