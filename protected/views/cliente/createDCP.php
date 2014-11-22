<?php
$this->breadcrumbs=array(
	'Cliente'=>array('index'),
         $id=>array('viewDCP','id'=>$id),
        'Nuevo Contacto'
);

$this->menu=array(
        array('label'=>'Ver Contactos', 'url'=>array('viewDCP', 'id'=>$id)),
);
?>	
<h2>Nuevo Contacto</h2>

<div class="form">

<?php
    $form=$this->beginWidget('CActiveForm');?>

<p class="note">Los campos (<span class="required">*</span>) son requeridos.</p>

        <br>
	<?php echo $form->errorSummary($modelDCP); ?>
        
        <div class="row" hidden="true">
		<?php echo $form->labelEx($modelDCP,'Cliente_ci'); ?>
		<?php echo $form->dropDownList($modelDCP,'Cliente_ci',array($id=>$id)); ?>
		<?php echo $form->error($modelDCP,'Cliente_ci'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($modelDCP,'TipoContacto_id'); ?>
		<?php echo $form->dropDownList($modelDCP,'TipoContacto_id',CHtml::listData(TipoContacto::model()->findAll(),'id','descripcion'));?>
		<?php echo $form->error($modelDCP,'TipoContacto_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelDCP,'descripcion'); ?>
		<?php echo $form->textField($modelDCP,'descripcion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($modelDCP,'descripcion'); ?>
	</div>

        <br> 
	<div class="row buttons">
		<?php echo CHtml::submitButton('Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
