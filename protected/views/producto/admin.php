<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Producto'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Producto', 'url'=>array('index')),
	array('label'=>'Nuevo Producto', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#producto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Productos</h1>

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
	'id'=>'producto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'codigo',
		'descripcion',
		'stock',
		'precioVenta',
                array(
                  'header'=> 'Laboratorio_id',
                   'name'=>'Laboratorio_id',
                  'value'=>'$data->laboratorio->descripcion', 
                ),
                array(
                  'header'=> 'Estanteria_codigo',
                   'name'=>'Estanteria_codigo',
                  'value'=>'$data->estanteriaCodigo->descripcion', 
                ),
                array(
                  'header'=> 'Presentacion_id',
                   'name'=>'Presentacion_id',
                  'value'=>'$data->presentacion->descripcion', 
                ),
            
		//'imagen',
		//'Laboratorio_id',		
		//'Estanteria_codigo',
		//'Presentacion_id',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
