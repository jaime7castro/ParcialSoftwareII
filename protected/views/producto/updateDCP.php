
<?php
$this->breadcrumbs=array(
	'Producto'=>array('index'),
         $modelDCP->Producto_codigo=>array('viewDCP','id'=>$modelDCP->Producto_codigo),
        'Editar Funcion del Producto'
);
$this->menu=array(
        array('label'=>'Ver Funcion del Producto', 'url'=>array('viewDCP', 'id'=>$modelDCP->Producto_codigo)),
);
?>

<h2>Editar la Funcion del Producto</h2>

<br>
<div class="form">
    
<?php
    $form=$this->beginWidget('CActiveForm');?>


	<div class="row">
		<?php echo $form->labelEx($modelDCP,'Funcion_id'); ?>
		<?php echo $form->dropDownList($modelDCP,'Funcion_id',CHtml::listData(Funcion::model()->findAll(),'id','descripcion')); ?>
		<?php echo $form->error($modelDCP,'Funcion_id'); ?>
	</div>

<br>
<div class="row buttons">
    <?php echo CHtml::submitButton('Editar');?>
</div>>

<?php
    $this->endWidget();
?>
</div>

