<?php
/* @var $this LoteProductoController */
/* @var $model LoteProducto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Lote_id'); ?>
		<?php echo $form->textField($model,'Lote_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidadActual'); ?>
		<?php echo $form->textField($model,'cantidadActual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precioCompra'); ?>
		<?php echo $form->textField($model,'precioCompra',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Producto_codigo'); ?>
		<?php echo $form->textField($model,'Producto_codigo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->