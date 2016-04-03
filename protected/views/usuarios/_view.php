<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdUsuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdUsuario), array('view', 'id'=>$data->IdUsuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clave')); ?>:</b>
	<?php echo CHtml::encode($data->clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('baja')); ?>:</b>
	<?php echo CHtml::encode($data->baja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('permisoweb')); ?>:</b>
	<?php echo CHtml::encode($data->permisoweb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usrNombre')); ?>:</b>
	<?php echo CHtml::encode($data->usrNombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NivelAcceso')); ?>:</b>
	<?php echo CHtml::encode($data->NivelAcceso); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('port_winsock')); ?>:</b>
	<?php echo CHtml::encode($data->port_winsock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sql_name')); ?>:</b>
	<?php echo CHtml::encode($data->sql_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sql_pass')); ?>:</b>
	<?php echo CHtml::encode($data->sql_pass); ?>
	<br />

	*/ ?>

</div>