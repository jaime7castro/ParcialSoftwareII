
<?php
$this->breadcrumbs=array(
	'Pedido'=>array('index'),
         $model->Pedido_id=>array('viewDNS','id'=>$model->Pedido_id),
        'Editar Detalle del Pedido'
);
$this->menu=array(
        array('label'=>'Ver Detalle', 'url'=>array('viewDNS', 'id'=>$model->Pedido_id)),
);
?>

<h1>Editar el Detalle del Pedido</h1>

<div class="form">
    
<?php
    $form=$this->beginWidget('CActiveForm');?>
        <br>
        <?php echo $form->errorSummary($model); ?>

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
        <br>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Editar'); ?>
	</div>

<?php
    $this->endWidget();
?>
</div>

