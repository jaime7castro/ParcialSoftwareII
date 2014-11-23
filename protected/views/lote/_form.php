<?php
/* @var $this LoteController */
/* @var $model Lote */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lote-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'identidicador'); ?>
		<?php echo $form->textField($model,'identidicador',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'identidicador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio'); ?>
		<?php echo $form->textField($model,'precio',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidadInicial'); ?>
		<?php echo $form->textField($model,'cantidadInicial'); ?>
		<?php echo $form->error($model,'cantidadInicial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaVencimiento'); ?>
		<?php 
                $this->widget('zii.widgets.jui.CJuiDatePicker',
                    array(
                        'model'=>$model,
                        'attribute'=>'fechaVencimiento',
                        'language'=>'es',
                        'options'=>array(
                            'dateFormat'=>'yy/mm/dd',
                            'constrainInput'=>true,
                            'duration'=>'fast',
                            'showAnim'=>'slide',
                            'selectOtherMonths'=>true,
                            'showButtonPanel'=>true,
                            'showOtherMonths'=>true, 
                            'changeMonth' => true, 
                            'changeYear' => true,
                        ),
                    )
                );
                
                ?>
		<?php echo $form->error($model,'fechaVencimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Producto_codigo'); ?>
		<?php echo $form->dropDownList($model,'Producto_codigo',CHtml::listData(Producto::model()->findAll(),'codigo','descripcion')); ?>
		<?php echo $form->error($model,'Producto_codigo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->