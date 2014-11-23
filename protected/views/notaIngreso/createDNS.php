<?php
$this->breadcrumbs=array(
	'Nota de Ingreso'=>array('index'),
         $id=>array('viewDNS','id'=>$id),
        'Nuevo Detalle'
);

$this->menu=array(
        array('label'=>'Ver Detalle', 'url'=>array('viewDNS', 'id'=>$id)),
);
?>	
<h1>Nuevo Detalle de la Nota de Ingreso</h1>

<div class="form">

<?php
    $form=$this->beginWidget('CActiveForm');?>

<p class="note">Los campos (<span class="required">*</span>) son requeridos.</p>
        <br>
        <?php echo $form->errorSummary($model); ?>

        <div class="row" hidden="true">
		<?php echo $form->labelEx($model,'NotaIngreso_id'); ?>
		<?php echo $form->dropDownList($model,'NotaIngreso_id',array($id=>$id)); ?>
		<?php echo $form->error($model,'NotaIngreso_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Lote_id'); ?>
		<?php echo $form->dropDownList($model,'Lote_id',CHtml::listData(Lote::model()->findAll(),'id','identidicador')); ?>
		<?php echo $form->error($model,'Lote_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>
        <div class="row buttons">
		<?php echo CHtml::submitButton('Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
