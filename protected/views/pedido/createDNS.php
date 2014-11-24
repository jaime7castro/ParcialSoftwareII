<?php
$this->breadcrumbs=array(
	'Pedido'=>array('index'),
         $id=>array('viewDNS','id'=>$id),
        'Nuevo Detalle'
);

$this->menu=array(
        array('label'=>'Ver Detalle', 'url'=>array('viewDNS', 'id'=>$id)),
);
?>	
<h1>Nuevo Detalle del Pedido</h1>

<div class="form">

<?php
    $form=$this->beginWidget('CActiveForm');?>

<p class="note">Los campos (<span class="required">*</span>) son requeridos.</p>
        <br>
        <?php echo $form->errorSummary($model); ?>

        <div class="row" hidden="true">
		<?php echo $form->labelEx($model,'Pedido_id'); ?>
		<?php echo $form->dropDownList($model,'Pedido_id',array($id=>$id)); ?>
		<?php echo $form->error($model,'Pedido_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Producto_codigo'); ?>
		<?php echo $form->dropDownList($model,'Producto_codigo',CHtml::listData(Producto::model()->findAll(),'codigo','descripcion')); ?>
		<?php echo $form->error($model,'Producto_codigo'); ?>
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
