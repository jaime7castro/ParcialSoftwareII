<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>

<div class="view">
        
        <?php echo CHtml::image(Yii::app()->baseUrl."/images/".$data->imagen); ?>
    
	<br><b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo), array('view', 'id'=>$data->codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock')); ?>:</b>
	<?php echo CHtml::encode($data->stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precioVenta')); ?>:</b>
	<?php echo CHtml::encode($data->precioVenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Laboratorio_id')); ?>:</b>
	<?php echo CHtml::encode($data->laboratorio->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estanteria_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->estanteriaCodigo->descripcion); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('Presentacion_id')); ?>:</b>
	<?php echo CHtml::encode($data->presentacion->descripcion); ?>
	<br />

	
        <?php echo CHtml::link(CHtml::encode('ingresar a FUNCIONES DEL PRODUCTO'), array('viewDCP', 'id'=>$data->codigo));?>
        <br>
        <?php echo CHtml::link(CHtml::encode('ingresar a PRODUCTOS SIMILARES'), array('viewSIM', 'id'=>$data->codigo));?>

</div>