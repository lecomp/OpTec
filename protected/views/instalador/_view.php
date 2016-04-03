<?php
/* @var $this InstaladorController */
/* @var $data Instalador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDInstalador')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDInstalador), array('view', 'id'=>$data->IDInstalador)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InstNombre')); ?>:</b>
	<?php echo CHtml::encode($data->InstNombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InstEmpresa')); ?>:</b>
	<?php echo CHtml::encode($data->InstEmpresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InstDomicilio')); ?>:</b>
	<?php echo CHtml::encode($data->InstDomicilio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InstTelefono')); ?>:</b>
	<?php echo CHtml::encode($data->InstTelefono); ?>
	<br />

<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('Usuario')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->Usuario); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('Clave')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->Clave); ?>
<!--	<br />-->

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('NivelAcceso')); ?>:</b>
	<?php echo CHtml::encode($data->NivelAcceso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Foto')); ?>:</b>
	<?php echo CHtml::encode($data->Foto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Legajo')); ?>:</b>
	<?php echo CHtml::encode($data->Legajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaIngreso')); ?>:</b>
	<?php echo CHtml::encode($data->FechaIngreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CuentaSueldo')); ?>:</b>
	<?php echo CHtml::encode($data->CuentaSueldo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CuentaBanco')); ?>:</b>
	<?php echo CHtml::encode($data->CuentaBanco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FormaPago')); ?>:</b>
	<?php echo CHtml::encode($data->FormaPago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TipoInstalador')); ?>:</b>
	<?php echo CHtml::encode($data->TipoInstalador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FTrabajo')); ?>:</b>
	<?php echo CHtml::encode($data->FTrabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FMaterial')); ?>:</b>
	<?php echo CHtml::encode($data->FMaterial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FKm')); ?>:</b>
	<?php echo CHtml::encode($data->FKm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NivelCobranza')); ?>:</b>
	<?php echo CHtml::encode($data->NivelCobranza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDSupervisor')); ?>:</b>
	<?php echo CHtml::encode($data->IDSupervisor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Baja')); ?>:</b>
	<?php echo CHtml::encode($data->Baja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PermisoWeb')); ?>:</b>
	<?php echo CHtml::encode($data->PermisoWeb); ?>
	<br />

	*/ ?>

</div>