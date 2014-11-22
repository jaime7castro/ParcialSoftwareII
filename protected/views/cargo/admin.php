<?php
/* @var $this CargoController */
/* @var $model Cargo */

$this->breadcrumbs=array(
	'Cargo'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Cargo', 'url'=>array('index')),
	array('label'=>'Nuevo Cargo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cargo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Cargo</h1>

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
	'id'=>'cargo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
