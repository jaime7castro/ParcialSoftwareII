
<?php
$this->breadcrumbs=array(
	'Nota de Salida'=>array('index'),
         $model->NotaSalida_id=>array('viewDNS','id'=>$model->NotaSalida_id),
        'Editar Detalle Nota de Salida'
);
$this->menu=array(
        array('label'=>'Ver Detalle', 'url'=>array('viewDNS', 'id'=>$model->NotaSalida_id)),
);
?>

<h1>Editar el Detalle de la Nota de Salida</h1>

<div class="form">
    
<?php
    $form=$this->beginWidget('CActiveForm');?>
        <br>
        <?php echo $form->errorSummary($model); ?>

        <div class="row">
		<?php echo $form->labelEx($model,'Producto_codigo'); ?>
		<?php echo $form->textField($model,'Producto_codigo');
                //echo $form->dropDownList($model,'Producto_codigo',CHtml::listData(Producto::model()->findAll(),'codigo','descripcion')); ?>
		<?php echo $form->error($model,'Producto_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'justificacion'); ?>
		<?php echo $form->textField($model,'justificacion',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'justificacion'); ?>
	</div>
        <br>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Editar'); ?>
	</div>

<?php
    $this->endWidget();
?>
</div>

