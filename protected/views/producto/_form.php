<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Los campos <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo'); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>
        
        <?php echo CHtml::activeFileField($model,'image'); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'stock'); ?>
		<?php echo $form->textField($model,'stock',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precioVenta'); ?>
		<?php echo $form->textField($model,'precioVenta',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'precioVenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Laboratorio_id'); ?>                                                           
		<?php echo $form->dropDownList($model,'Laboratorio_id',Chtml::listData(Laboratorio::model()->findAll(),'id','descripcion'), array('null'=>'Ninguno..')); ?>
		<?php echo $form->error($model,'Laboratorio_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estanteria_codigo'); ?>
		<?php echo $form->dropDownList($model,'Estanteria_codigo',Chtml::listData(Estanteria::model()->findAll(),'codigo','descripcion'),array('null'=>'Ninguno..')); ?>
		<?php echo $form->error($model,'Estanteria_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Presentacion_id'); ?>
		<?php echo $form->dropDownList($model,'Presentacion_id',Chtml::listData(Presentacion::model()->findAll(),'id','descripcion'),array('null'=>'Ninguno..')); ?>
		<?php echo $form->error($model,'Presentacion_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->