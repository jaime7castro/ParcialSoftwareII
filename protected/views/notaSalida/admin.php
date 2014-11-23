<?php
/* @var $this NotaSalidaController */
/* @var $model NotaSalida */

$this->breadcrumbs=array(
	'Nota de Salida'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Nota de Salida', 'url'=>array('index')),
	array('label'=>'Nueva Nota de Salida', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#nota-salida-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Adminstrar Nota de Salida</h1>

<p>
Opcionalmente, puede introducir un operador de comparación (<, <=,>,> =, <> o =) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'nota-salida-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'hora',
		'fecha',
		'Usuario_codigo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
