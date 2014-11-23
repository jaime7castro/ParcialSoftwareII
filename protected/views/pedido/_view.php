<?php
/* @var $this PedidoController */
/* @var $data Pedido */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cliente_ci')); ?>:</b>
	<?php echo CHtml::encode($data->Cliente_ci); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('Nombre del Cliente')); ?>:</b>
	<?php echo CHtml::encode($data->clienteCi->nombres." ".$data->clienteCi->apPat." ".$data->clienteCi->apMat); ?>
	<br />


</div>