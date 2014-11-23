<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Producto'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'Listar Producto', 'url'=>array('index')),
	array('label'=>'Nuevo Producto', 'url'=>array('create')),
	array('label'=>'Editar Producto', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Eliminar Producto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Producto', 'url'=>array('admin')),
);
?>

<h1>Ver Producto #<?php echo $model->codigo; ?></h1>

<?php echo CHtml::image(Yii::app()->baseUrl."/images/".$model->imagen); ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'descripcion',
		'stock',
		'precioVenta',
		'imagen',
                array(
                  'label'=> 'Laboratorio',
                  'value'=>$model->laboratorio->descripcion, 
                ),
                array(
                  'label'=> 'Estanteria',
                  'value'=>$model->estanteriaCodigo->descripcion, 
                ),
                array(
                  'label'=> 'Presentacion',
                  'value'=>$model->presentacion->descripcion, 
                ),
		//'Laboratorio_id',
		//'Estanteria_codigo',
		//'Presentacion_id',
	),
)); ?>

