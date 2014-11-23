
<?php
$this->breadcrumbs=array(
	'Producto'=>array('index'),
         $modelDCP->Producto_codigo=>array('viewSIM','id'=>$modelDCP->Producto_codigo),
        'Editar Producto Similar'
);
$this->menu=array(
        array('label'=>'Ver Productos Similares', 'url'=>array('viewSIM', 'id'=>$modelDCP->Producto_codigo)),
);
?>

<h2>Editar Producto Similar</h2>

<br>
<div class="form">
    
<?php
    $form=$this->beginWidget('CActiveForm');?>


	 <div class="row">
		<?php echo $form->labelEx($modelDCP,'Producto_codigoSimilar'); ?>
		<?php echo $form->dropDownList($modelDCP,'Producto_codigoSimilar',CHtml::listData(Producto::model()->findAll(),'codigo','descripcion')); ?>
		<?php echo $form->error($modelDCP,'Producto_codigoSimilar'); ?>
	</div>

<br>
<div class="row buttons">
    <?php echo CHtml::submitButton('Editar');?>
</div>>

<?php
    $this->endWidget();
?>
</div>

