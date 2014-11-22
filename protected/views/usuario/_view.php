<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo), array('view', 'id'=>$data->codigo)); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Cargo_id')); ?>:</b>
	<?php echo CHtml::encode($data->Cargo_id); ?>
	<br />

	*/ ?>
        <?php echo CHtml::link(CHtml::encode('ingresar a CONTACTOS'), array('viewDCU', 'id'=>$data->codigo));?>

</div>