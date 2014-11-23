<?php
/* @var $this NotaSalidaController */
/* @var $data NotaSalida */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_codigo); ?>
	<br />
        
        <?php echo CHtml::link(CHtml::encode('ingresar al DETALLE'), array('viewDNS', 'id'=>$data->id)); ?>


</div>