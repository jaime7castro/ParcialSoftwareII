<?php
$this->breadcrumbs=array(
	'Usuario'=>array('index'),
         $id=>array('viewDCU','id'=>$id),
        'Nuevo Contacto'
);

$this->menu=array(
        array('label'=>'Ver Contactos', 'url'=>array('viewDCU', 'id'=>$id)),
);
?>	
<h2>Nuevo Contacto</h2>

<div class="form">

<?php
    $form=$this->beginWidget('CActiveForm');?>

<p class="note">Los campos (<span class="required">*</span>) son requeridos.</p>

        <br>
	<?php echo $form->errorSummary($modelDCU); ?>
        
        <div class="row" hidden="true">
		<?php echo $form->labelEx($modelDCU,'Usuario_codigo'); ?>
		<?php echo $form->dropDownList($modelDCU,'Usuario_codigo',array($id=>$id)); ?>
		<?php echo $form->error($modelDCU,'Usuario_codigo'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($modelDCU,'TipoContacto_id'); ?>
		<?php echo $form->dropDownList($modelDCU,'TipoContacto_id',CHtml::listData(TipoContacto::model()->findAll(),'id','descripcion'));?>
		<?php echo $form->error($modelDCU,'TipoContacto_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDCU,'descripcion'); ?>
		<?php echo $form->textField($modelDCU,'descripcion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($modelDCU,'descripcion'); ?>
	</div>

        <br> 
	<div class="row buttons">
		<?php echo CHtml::submitButton('Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
