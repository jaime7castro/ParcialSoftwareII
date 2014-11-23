<?php
/* @var $this NotaIngresoController */
/* @var $model NotaIngreso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nota-ingreso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'hora'); 
		$model->hora=date("h:i:s");
                echo $form->textField($model,'hora',array('value'=>$model->hora, 'readonly'=>'false','size'=>5,'maxlength'=>10));
                echo $form->error($model,'hora'); 
                ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha');
                $model->fecha=date("Y/m/d");
                echo $form->textField($model,'fecha',array('value'=>$model->fecha, 'readonly'=>'false','size'=>5,'maxlength'=>10));
                echo $form->error($model,'fecha'); 
                ?>
	</div>

        <div class="row" hidden="true">
		<?php $model->monto='0'; ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Provedor_codigo'); ?>
		<?php echo $form->dropDownList($model,'Provedor_codigo',CHtml::listData(Provedor::model()->findAll(),'codigo','razonSocial')); ?>
		<?php echo $form->error($model,'Provedor_codigo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->