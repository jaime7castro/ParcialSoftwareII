<?php
$this->breadcrumbs=array(
	'Producto'=>array('index'),
         $id=>array('viewSIM','id'=>$id),
        'Nueva Producto Similar'
);

$this->menu=array(
        array('label'=>'Ver Productos similares', 'url'=>array('viewSIM', 'id'=>$id)),
);
?>	
<h2>Nuevo Producto Similar</h2>

<div class="form">

<?php
    $form=$this->beginWidget('CActiveForm');?>

<p class="note">Los campos (<span class="required">*</span>) son requeridos.</p>

        <br>
	<?php echo $form->errorSummary($modelDCP); ?>

        <div class="row" hidden="true">
		<?php echo $form->labelEx($modelDCP,'Producto_codigo'); ?>
		<?php echo $form->dropDownList($modelDCP,'Producto_codigo',array($id=>$id)); ?>
		<?php echo $form->error($modelDCP,'Producto_codigo'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($modelDCP,'Producto_codigoSimilar'); ?>
		<?php echo $form->dropDownList($modelDCP,'Producto_codigoSimilar',CHtml::listData(Producto::model()->findAll(),'codigo','descripcion')); ?>
		<?php echo $form->error($modelDCP,'Producto_codigoSimilar'); ?>
	</div>

        <br> 
	<div class="row buttons">
		<?php echo CHtml::submitButton('Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
