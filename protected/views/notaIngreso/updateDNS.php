
<?php
$this->breadcrumbs=array(
	'Nota de Ingreso'=>array('index'),
         $model->NotaIngreso_id=>array('viewDNS','id'=>$model->NotaIngreso_id),
        'Editar Detalle Nota de Ingreso'
);
$this->menu=array(
        array('label'=>'Ver Detalle', 'url'=>array('viewDNS', 'id'=>$model->NotaIngreso_id)),
);
?>

<h1>Editar el Detalle de la Nota de Ingreso</h1>

<div class="form">
    
<?php
    $form=$this->beginWidget('CActiveForm');?>
        <br>
        <?php echo $form->errorSummary($model); ?>

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
        <br>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Editar'); ?>
	</div>

<?php
    $this->endWidget();
?>
</div>

