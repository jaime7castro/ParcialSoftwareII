<?php
/* @var $this LoteProductoController */
/* @var $model LoteProducto */

$this->breadcrumbs=array(
	'Lote Producto'=>array('index'),
	'Tabla',
);

$this->menu=array(
	array('label'=>'Listar LoteProducto', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lote-producto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Lote Productos</h1>

<p>
Opcionalmente, puede introducir un operador de comparación (<, <=,>,> =, <> o =) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'lote-producto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
                array(
                  'header'=>'Lote_id',
                   'name'=>'Lote_id',
                  'value'=>'$data->lote->identidicador', 
                ),
		'id',
		'cantidadActual',
		'precioCompra',
                 array(
                  'header'=>'Producto_codigo',
                   'name'=>'Producto_codigo',
                  'value'=>'$data->productoCodigo->descripcion', 
                ),
                array(
                'class' => 'CButtonColumn',
                'template'=>'{view}', // botones a mostrar
                'viewButtonUrl'=>'Yii::app()->createUrl("/loteProducto/view&id=$data->id" )',
               
                ),
	),
)); ?>
