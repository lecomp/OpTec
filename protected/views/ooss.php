<?php
/* @var $this OossController */
/* @var $model Ooss */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ooss-ooss-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Instancia'); ?>
		<?php echo $form->textField($model,'Instancia'); ?>
		<?php echo $form->error($model,'Instancia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdCliente'); ?>
		<?php echo $form->textField($model,'IdCliente'); ?>
		<?php echo $form->error($model,'IdCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdInstalador'); ?>
		<?php echo $form->textField($model,'IdInstalador'); ?>
		<?php echo $form->error($model,'IdInstalador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdEmpresa'); ?>
		<?php echo $form->textField($model,'IdEmpresa'); ?>
		<?php echo $form->error($model,'IdEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SCalidad'); ?>
		<?php echo $form->textField($model,'SCalidad'); ?>
		<?php echo $form->error($model,'SCalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Levantada'); ?>
		<?php echo $form->textField($model,'Levantada'); ?>
		<?php echo $form->error($model,'Levantada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SinAlta'); ?>
		<?php echo $form->textField($model,'SinAlta'); ?>
		<?php echo $form->error($model,'SinAlta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LEF'); ?>
		<?php echo $form->textField($model,'LEF'); ?>
		<?php echo $form->error($model,'LEF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LFF'); ?>
		<?php echo $form->textField($model,'LFF'); ?>
		<?php echo $form->error($model,'LFF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RepQuien'); ?>
		<?php echo $form->textField($model,'RepQuien'); ?>
		<?php echo $form->error($model,'RepQuien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Baja'); ?>
		<?php echo $form->textField($model,'Baja'); ?>
		<?php echo $form->error($model,'Baja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mail'); ?>
		<?php echo $form->textField($model,'Mail'); ?>
		<?php echo $form->error($model,'Mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MatRepuesto'); ?>
		<?php echo $form->textField($model,'MatRepuesto'); ?>
		<?php echo $form->error($model,'MatRepuesto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NumeroLiquidacion'); ?>
		<?php echo $form->textField($model,'NumeroLiquidacion'); ?>
		<?php echo $form->error($model,'NumeroLiquidacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LiquidadaT'); ?>
		<?php echo $form->textField($model,'LiquidadaT'); ?>
		<?php echo $form->error($model,'LiquidadaT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EnvioMat'); ?>
		<?php echo $form->textField($model,'EnvioMat'); ?>
		<?php echo $form->error($model,'EnvioMat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EnvioOK'); ?>
		<?php echo $form->textField($model,'EnvioOK'); ?>
		<?php echo $form->error($model,'EnvioOK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Monto'); ?>
		<?php echo $form->textField($model,'Monto'); ?>
		<?php echo $form->error($model,'Monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MontoTotal'); ?>
		<?php echo $form->textField($model,'MontoTotal'); ?>
		<?php echo $form->error($model,'MontoTotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MontoReclamado'); ?>
		<?php echo $form->textField($model,'MontoReclamado'); ?>
		<?php echo $form->error($model,'MontoReclamado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PagadoXTrabajo'); ?>
		<?php echo $form->textField($model,'PagadoXTrabajo'); ?>
		<?php echo $form->error($model,'PagadoXTrabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PagTADT'); ?>
		<?php echo $form->textField($model,'PagTADT'); ?>
		<?php echo $form->error($model,'PagTADT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PagadoXMaterial'); ?>
		<?php echo $form->textField($model,'PagadoXMaterial'); ?>
		<?php echo $form->error($model,'PagadoXMaterial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PagMADT'); ?>
		<?php echo $form->textField($model,'PagMADT'); ?>
		<?php echo $form->error($model,'PagMADT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PagadoXKm'); ?>
		<?php echo $form->textField($model,'PagadoXKm'); ?>
		<?php echo $form->error($model,'PagadoXKm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PagKADT'); ?>
		<?php echo $form->textField($model,'PagKADT'); ?>
		<?php echo $form->error($model,'PagKADT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CostoExtra'); ?>
		<?php echo $form->textField($model,'CostoExtra'); ?>
		<?php echo $form->error($model,'CostoExtra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NroPedido'); ?>
		<?php echo $form->textField($model,'NroPedido'); ?>
		<?php echo $form->error($model,'NroPedido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NroOT'); ?>
		<?php echo $form->textField($model,'NroOT'); ?>
		<?php echo $form->error($model,'NroOT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ContactoCliente'); ?>
		<?php echo $form->textField($model,'ContactoCliente'); ?>
		<?php echo $form->error($model,'ContactoCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NumeroChip'); ?>
		<?php echo $form->textField($model,'NumeroChip'); ?>
		<?php echo $form->error($model,'NumeroChip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpresaTel'); ?>
		<?php echo $form->textField($model,'EmpresaTel'); ?>
		<?php echo $form->error($model,'EmpresaTel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TipoTrabajo'); ?>
		<?php echo $form->textField($model,'TipoTrabajo'); ?>
		<?php echo $form->error($model,'TipoTrabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nivel'); ?>
		<?php echo $form->textField($model,'Nivel'); ?>
		<?php echo $form->error($model,'Nivel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RemitoOpTec'); ?>
		<?php echo $form->textField($model,'RemitoOpTec'); ?>
		<?php echo $form->error($model,'RemitoOpTec'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RemitoManual'); ?>
		<?php echo $form->textField($model,'RemitoManual'); ?>
		<?php echo $form->error($model,'RemitoManual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NroContrato'); ?>
		<?php echo $form->textField($model,'NroContrato'); ?>
		<?php echo $form->error($model,'NroContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Finalizada'); ?>
		<?php echo $form->textField($model,'Finalizada'); ?>
		<?php echo $form->error($model,'Finalizada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Visitada'); ?>
		<?php echo $form->textField($model,'Visitada'); ?>
		<?php echo $form->error($model,'Visitada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CambioDealer'); ?>
		<?php echo $form->textField($model,'CambioDealer'); ?>
		<?php echo $form->error($model,'CambioDealer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pendiente'); ?>
		<?php echo $form->textField($model,'Pendiente'); ?>
		<?php echo $form->error($model,'Pendiente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MarcaLiq'); ?>
		<?php echo $form->textField($model,'MarcaLiq'); ?>
		<?php echo $form->error($model,'MarcaLiq'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Liquidada'); ?>
		<?php echo $form->textField($model,'Liquidada'); ?>
		<?php echo $form->error($model,'Liquidada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LiquidadaV'); ?>
		<?php echo $form->textField($model,'LiquidadaV'); ?>
		<?php echo $form->error($model,'LiquidadaV'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cobrada'); ?>
		<?php echo $form->textField($model,'Cobrada'); ?>
		<?php echo $form->error($model,'Cobrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Reclamada'); ?>
		<?php echo $form->textField($model,'Reclamada'); ?>
		<?php echo $form->error($model,'Reclamada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Presentada'); ?>
		<?php echo $form->textField($model,'Presentada'); ?>
		<?php echo $form->error($model,'Presentada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Rechazada'); ?>
		<?php echo $form->textField($model,'Rechazada'); ?>
		<?php echo $form->error($model,'Rechazada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KmRecorridos'); ?>
		<?php echo $form->textField($model,'KmRecorridos'); ?>
		<?php echo $form->error($model,'KmRecorridos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FaltaMaterial'); ?>
		<?php echo $form->textField($model,'FaltaMaterial'); ?>
		<?php echo $form->error($model,'FaltaMaterial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdMarca'); ?>
		<?php echo $form->textField($model,'IdMarca'); ?>
		<?php echo $form->error($model,'IdMarca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdLiq'); ?>
		<?php echo $form->textField($model,'IdLiq'); ?>
		<?php echo $form->error($model,'IdLiq'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdModif'); ?>
		<?php echo $form->textField($model,'IdModif'); ?>
		<?php echo $form->error($model,'IdModif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdFinal'); ?>
		<?php echo $form->textField($model,'IdFinal'); ?>
		<?php echo $form->error($model,'IdFinal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdAlta'); ?>
		<?php echo $form->textField($model,'IdAlta'); ?>
		<?php echo $form->error($model,'IdAlta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MotivoRechazo'); ?>
		<?php echo $form->textField($model,'MotivoRechazo'); ?>
		<?php echo $form->error($model,'MotivoRechazo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estado'); ?>
		<?php echo $form->textField($model,'Estado'); ?>
		<?php echo $form->error($model,'Estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PeriodoLiqEF'); ?>
		<?php echo $form->textField($model,'PeriodoLiqEF'); ?>
		<?php echo $form->error($model,'PeriodoLiqEF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PeriodoLiqFF'); ?>
		<?php echo $form->textField($model,'PeriodoLiqFF'); ?>
		<?php echo $form->error($model,'PeriodoLiqFF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nomenclatura'); ?>
		<?php echo $form->textField($model,'Nomenclatura'); ?>
		<?php echo $form->error($model,'Nomenclatura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Adicionales'); ?>
		<?php echo $form->textField($model,'Adicionales'); ?>
		<?php echo $form->error($model,'Adicionales'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cableados'); ?>
		<?php echo $form->textField($model,'Cableados'); ?>
		<?php echo $form->error($model,'Cableados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IDadic'); ?>
		<?php echo $form->textField($model,'IDadic'); ?>
		<?php echo $form->error($model,'IDadic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PuntoVenta'); ?>
		<?php echo $form->textField($model,'PuntoVenta'); ?>
		<?php echo $form->error($model,'PuntoVenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaRecepcion'); ?>
		<?php echo $form->textField($model,'FechaRecepcion'); ?>
		<?php echo $form->error($model,'FechaRecepcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HDesde'); ?>
		<?php echo $form->textField($model,'HDesde'); ?>
		<?php echo $form->error($model,'HDesde'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HHasta'); ?>
		<?php echo $form->textField($model,'HHasta'); ?>
		<?php echo $form->error($model,'HHasta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaProgramada'); ?>
		<?php echo $form->textField($model,'FechaProgramada'); ?>
		<?php echo $form->error($model,'FechaProgramada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HoraProgramada'); ?>
		<?php echo $form->textField($model,'HoraProgramada'); ?>
		<?php echo $form->error($model,'HoraProgramada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Problema'); ?>
		<?php echo $form->textField($model,'Problema'); ?>
		<?php echo $form->error($model,'Problema'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Trabajo'); ?>
		<?php echo $form->textField($model,'Trabajo'); ?>
		<?php echo $form->error($model,'Trabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Observaciones'); ?>
		<?php echo $form->textField($model,'Observaciones'); ?>
		<?php echo $form->error($model,'Observaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InstalacionesDatosContrato'); ?>
		<?php echo $form->textField($model,'InstalacionesDatosContrato'); ?>
		<?php echo $form->error($model,'InstalacionesDatosContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaReprog'); ?>
		<?php echo $form->textField($model,'FechaReprog'); ?>
		<?php echo $form->error($model,'FechaReprog'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HoraReprog'); ?>
		<?php echo $form->textField($model,'HoraReprog'); ?>
		<?php echo $form->error($model,'HoraReprog'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DesdeReprog'); ?>
		<?php echo $form->textField($model,'DesdeReprog'); ?>
		<?php echo $form->error($model,'DesdeReprog'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HastaReprog'); ?>
		<?php echo $form->textField($model,'HastaReprog'); ?>
		<?php echo $form->error($model,'HastaReprog'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MotivoReprog'); ?>
		<?php echo $form->textField($model,'MotivoReprog'); ?>
		<?php echo $form->error($model,'MotivoReprog'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ContactoReprog'); ?>
		<?php echo $form->textField($model,'ContactoReprog'); ?>
		<?php echo $form->error($model,'ContactoReprog'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaMarca'); ?>
		<?php echo $form->textField($model,'FechaMarca'); ?>
		<?php echo $form->error($model,'FechaMarca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaLiq'); ?>
		<?php echo $form->textField($model,'FechaLiq'); ?>
		<?php echo $form->error($model,'FechaLiq'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaLiqV'); ?>
		<?php echo $form->textField($model,'FechaLiqV'); ?>
		<?php echo $form->error($model,'FechaLiqV'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HoraInicio'); ?>
		<?php echo $form->textField($model,'HoraInicio'); ?>
		<?php echo $form->error($model,'HoraInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HoraFin'); ?>
		<?php echo $form->textField($model,'HoraFin'); ?>
		<?php echo $form->error($model,'HoraFin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DescripcionTareas'); ?>
		<?php echo $form->textField($model,'DescripcionTareas'); ?>
		<?php echo $form->error($model,'DescripcionTareas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MaterialesIndirectos'); ?>
		<?php echo $form->textField($model,'MaterialesIndirectos'); ?>
		<?php echo $form->error($model,'MaterialesIndirectos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TiempoViaje'); ?>
		<?php echo $form->textField($model,'TiempoViaje'); ?>
		<?php echo $form->error($model,'TiempoViaje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DescripcionFaltante'); ?>
		<?php echo $form->textField($model,'DescripcionFaltante'); ?>
		<?php echo $form->error($model,'DescripcionFaltante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MatInstalados'); ?>
		<?php echo $form->textField($model,'MatInstalados'); ?>
		<?php echo $form->error($model,'MatInstalados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DescLiq'); ?>
		<?php echo $form->textField($model,'DescLiq'); ?>
		<?php echo $form->error($model,'DescLiq'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DescLiqInt'); ?>
		<?php echo $form->textField($model,'DescLiqInt'); ?>
		<?php echo $form->error($model,'DescLiqInt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DeskKM'); ?>
		<?php echo $form->textField($model,'DeskKM'); ?>
		<?php echo $form->error($model,'DeskKM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ObservacionMat'); ?>
		<?php echo $form->textField($model,'ObservacionMat'); ?>
		<?php echo $form->error($model,'ObservacionMat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaEnvio'); ?>
		<?php echo $form->textField($model,'FechaEnvio'); ?>
		<?php echo $form->error($model,'FechaEnvio'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->