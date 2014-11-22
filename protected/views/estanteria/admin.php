<?php
/* @var $this EstanteriaController */
/* @var $model Estanteria */

$this->breadcrumbs=array(
	'Estanteria'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Estanteria', 'url'=>array('index')),
	array('label'=>'Nuevo Estanteria', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#estanteria-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Estanteria</h1>

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
	'id'=>'estanteria-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'codigo',
		'descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
