
<?php
$this->breadcrumbs=array(
	'Usuario'=>array('index'),
         $modelDCU->Usuario_codigo=>array('viewDCU','id'=>$modelDCU->Usuario_codigo),
        'Editar Contacto'
);
$this->menu=array(
        array('label'=>'Ver Contactos', 'url'=>array('viewDCU', 'id'=>$modelDCU->Usuario_codigo)),
);
?>

<h2>Editar el Contacto del Provedor</h2>

<br>
<div class="form">
    
<?php
    $form=$this->beginWidget('CActiveForm');?>


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
    <?php echo CHtml::submitButton('Editar');?>
</div>>

<?php
    $this->endWidget();
?>
</div>

