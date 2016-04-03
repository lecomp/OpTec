<?php
/* @var $this ClientesController */
/* @var $data Clientes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdCliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdCliente), array('view', 'id'=>$data->IdCliente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CliNombre')); ?>:</b>
	<?php echo CHtml::encode($data->CliNombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NroCliente')); ?>:</b>
	<?php echo CHtml::encode($data->NroCliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CliDomicilio')); ?>:</b>
	<?php echo CHtml::encode($data->CliDomicilio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CliEntre')); ?>:</b>
	<?php echo CHtml::encode($data->CliEntre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CliLocalidad')); ?>:</b>
	<?php echo CHtml::encode($data->CliLocalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CliBarrio')); ?>:</b>
	<?php echo CHtml::encode($data->CliBarrio); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CliProvincia')); ?>:</b>
	<?php echo CHtml::encode($data->CliProvincia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CliTelFijo')); ?>:</b>
	<?php echo CHtml::encode($data->CliTelFijo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CliTelMovil')); ?>:</b>
	<?php echo CHtml::encode($data->CliTelMovil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CliContacto')); ?>:</b>
	<?php echo CHtml::encode($data->CliContacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CliTelContacto')); ?>:</b>
	<?php echo CHtml::encode($data->CliTelContacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Baja')); ?>:</b>
	<?php echo CHtml::encode($data->Baja); ?>
	<br />

	*/ ?>

</div>