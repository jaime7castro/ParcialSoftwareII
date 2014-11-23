<?php
/* @var $this LoteController */
/* @var $data Lote */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identidicador')); ?>:</b>
	<?php echo CHtml::encode($data->identidicador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidadInicial')); ?>:</b>
	<?php echo CHtml::encode($data->cantidadInicial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaVencimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fechaVencimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Producto_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->productoCodigo->descripcion); ?>
	<br />


</div>