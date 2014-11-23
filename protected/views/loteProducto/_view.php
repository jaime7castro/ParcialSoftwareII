<?php
/* @var $this LoteProductoController */
/* @var $data LoteProducto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Lote_id')); ?>:</b>
	<?php echo CHtml::encode($data->lote->identidicador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidadActual')); ?>:</b>
	<?php echo CHtml::encode($data->cantidadActual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precioCompra')); ?>:</b>
	<?php echo CHtml::encode($data->precioCompra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Producto_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->productoCodigo->descripcion); ?>
	<br />


</div>