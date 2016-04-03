<?php
/* @var $this MaterialesController */
/* @var $data Materiales */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDMateriales')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDMateriales), array('view', 'id'=>$data->IDMateriales)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdEmpresa')); ?>:</b>
	<?php echo CHtml::encode($data->IdEmpresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoInt')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoInt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CodigoExt')); ?>:</b>
	<?php echo CHtml::encode($data->CodigoExt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Marca')); ?>:</b>
	<?php echo CHtml::encode($data->Marca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Modelo')); ?>:</b>
	<?php echo CHtml::encode($data->Modelo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('StockGeneral')); ?>:</b>
	<?php echo CHtml::encode($data->StockGeneral); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StockReal')); ?>:</b>
	<?php echo CHtml::encode($data->StockReal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StockMinimo')); ?>:</b>
	<?php echo CHtml::encode($data->StockMinimo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UsoMax')); ?>:</b>
	<?php echo CHtml::encode($data->UsoMax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Costo')); ?>:</b>
	<?php echo CHtml::encode($data->Costo); ?>
	<br />

	*/ ?>

</div>