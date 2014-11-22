<?php
/* @var $this ClienteController */
/* @var $data Cliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ci')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ci), array('view', 'id'=>$data->ci)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres')); ?>:</b>
	<?php echo CHtml::encode($data->nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apPat')); ?>:</b>
	<?php echo CHtml::encode($data->apPat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apMat')); ?>:</b>
	<?php echo CHtml::encode($data->apMat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaNac')); ?>:</b>
	<?php echo CHtml::encode($data->fechaNac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

        <?php echo CHtml::link(CHtml::encode('ingresar a CONTACTOS'), array('viewDCP', 'id'=>$data->ci));?>

</div>