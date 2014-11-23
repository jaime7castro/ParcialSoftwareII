<?php
/* @var $this PedidoController */
/* @var $model Pedido */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pedido-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos <span class="required">*</span> son Requeridos.</p>

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

	<div class="row">
		<?php echo $form->labelEx($model,'Cliente_ci'); ?>
		<?php echo $form->textField($model,'Cliente_ci'); ?>
		<?php echo $form->error($model,'Cliente_ci'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Editar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->