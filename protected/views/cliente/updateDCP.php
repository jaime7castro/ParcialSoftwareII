
<?php
$this->breadcrumbs=array(
	'Cliente'=>array('index'),
         $modelDCP->Cliente_ci=>array('viewDCP','id'=>$modelDCP->Cliente_ci),
        'Editar Contacto'
);
$this->menu=array(
        array('label'=>'Ver Contactos', 'url'=>array('viewDCP', 'id'=>$modelDCP->Cliente_ci)),
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

