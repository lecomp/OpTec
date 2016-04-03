<?php
/* @var $this EmpresaController */
/* @var $data Empresa */
?>

<div class="view">

<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('IdEmpresa')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::link(CHtml::encode($data->IdEmpresa), array('view', 'id'=>$data->IdEmpresa)); ?>
<!--	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('EmpNombre')); ?>:</b>
	<?php echo CHtml::encode($data->EmpNombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EmpDomicilio')); ?>:</b>
	<?php echo CHtml::encode($data->EmpDomicilio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EmpBarrio')); ?>:</b>
	<?php echo CHtml::encode($data->EmpBarrio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EmpProvincia')); ?>:</b>
	<?php echo CHtml::encode($data->EmpProvincia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EmpPais')); ?>:</b>
	<?php echo CHtml::encode($data->EmpPais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EmpCP')); ?>:</b>
	<?php echo CHtml::encode($data->EmpCP); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('EmpMail')); ?>:</b>
	<?php echo CHtml::encode($data->EmpMail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EmpTelefono')); ?>:</b>
	<?php echo CHtml::encode($data->EmpTelefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EmpContacto')); ?>:</b>
	<?php echo CHtml::encode($data->EmpContacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EmpCargoContacto')); ?>:</b>
	<?php echo CHtml::encode($data->EmpCargoContacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EmpCUIT')); ?>:</b>
	<?php echo CHtml::encode($data->EmpCUIT); ?>
	<br />

	*/ ?>

</div>