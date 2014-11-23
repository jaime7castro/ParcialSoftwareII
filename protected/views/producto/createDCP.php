<?php
$this->breadcrumbs=array(
	'Producto'=>array('index'),
         $id=>array('viewDCP','id'=>$id),
        'Nueva Funcion del Producto'
);

$this->menu=array(
        array('label'=>'Ver Funciones del Producto', 'url'=>array('viewDCP', 'id'=>$id)),
);
?>	
<h2>Nuevas Funciones del Producto</h2>

<div class="form">

<?php
    $form=$this->beginWidget('CActiveForm');?>

<p class="note">Los campos (<span class="required">*</span>) son requeridos.</p>

        <br>
	<?php echo $form->errorSummary($modelDCP); ?>

        <div class="row" hidden="true">
		<?php echo $form->labelEx($modelDCP,'Producto_codigo'); ?>
		<?php echo $form->dropDownList($modelDCP,'Producto_codigo',array($id=>$id)); ?>
		<?php echo $form->error($modelDCP,'Producto_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDCP,'Funcion_id'); ?>
		<?php echo $form->dropDownList($modelDCP,'Funcion_id',CHtml::listData(Funcion::model()->findAll(),'id','descripcion')); ?>
		<?php echo $form->error($modelDCP,'Funcion_id'); ?>
	</div>
        <br> 
	<div class="row buttons">
		<?php echo CHtml::submitButton('Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
