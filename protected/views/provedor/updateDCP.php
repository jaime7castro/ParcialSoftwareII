
<?php
$this->breadcrumbs=array(
	'Provedor'=>array('index'),
         $modelDCP->Provedor_codigo=>array('viewDCP','id'=>$modelDCP->Provedor_codigo),
        'Editar Contacto'
);
$this->menu=array(
        array('label'=>'Ver Contactos', 'url'=>array('viewDCP', 'id'=>$modelDCP->Provedor_codigo)),
);
?>

<h2>Editar el Contacto del Provedor</h2>

<br>
<div class="form">
    
<?php
    $form=$this->beginWidget('CActiveForm');?>


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
    <?php echo CHtml::submitButton('Editar');?>
</div>>

<?php
    $this->endWidget();
?>
</div>

