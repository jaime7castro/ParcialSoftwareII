<?php
/* @var $this NotaIngresoController */
/* @var $model NotaIngreso */

$this->breadcrumbs=array(
	'Nota de Ingreso'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Nota de Ingreso', 'url'=>array('index')),
	array('label'=>'Nueva Nota de Ingreso', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#nota-ingreso-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Nota Ingreso</h1>

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
	'id'=>'nota-ingreso-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'hora',
		'fecha',
		//'monto',
		array(
                  'header'=> 'Provedor_codigo',
                   'name'=>'Provedor_codigo',
                  'value'=>'$data->provedorCodigo->razonSocial', 
                ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
