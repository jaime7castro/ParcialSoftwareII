<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombres'); ?>
		<?php echo $form->textField($model,'nombres',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apPat'); ?>
		<?php echo $form->textField($model,'apPat',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apPat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apMat'); ?>
		<?php echo $form->textField($model,'apMat',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apMat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->dropDownList($model,'sexo',array('H'=>'Hombre','M'=>'Mujer')); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaNac'); ?>
		<?php 
                $this->widget('zii.widgets.jui.CJuiDatePicker',
                    array(
                        'model'=>$model,
                        'attribute'=>'fechaNac',
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
		<?php echo $form->error($model,'fechaNac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cargo_id'); ?>
		<?php echo $form->dropDownList($model,'Cargo_id',CHtml::listData(Cargo::model()->findAll(),'id','descripcion')); ?>
		<?php echo $form->error($model,'Cargo_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Nuevo' : 'Editar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->