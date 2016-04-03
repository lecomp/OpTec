<?php
/* @var $this OossController */
/* @var $data Ooss */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdOS')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdOS), array('view', 'id'=>$data->IdOS)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NroPedido')); ?>:</b>
	<?php echo CHtml::encode($data->NroPedido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Instancia')); ?>:</b>
	<?php echo CHtml::encode($data->Instancia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdCliente')); ?>:</b>
	<?php echo CHtml::encode($data->IdCliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdInstalador')); ?>:</b>
	<?php echo CHtml::encode($data->IdInstalador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdEmpresa')); ?>:</b>
	<?php echo CHtml::encode($data->IdEmpresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaRecepcion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaRecepcion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('HDesde')); ?>:</b>
	<?php echo CHtml::encode($data->HDesde); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HHasta')); ?>:</b>
	<?php echo CHtml::encode($data->HHasta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaProgramada')); ?>:</b>
	<?php echo CHtml::encode($data->FechaProgramada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HoraProgramada')); ?>:</b>
	<?php echo CHtml::encode($data->HoraProgramada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ContactoCliente')); ?>:</b>
	<?php echo CHtml::encode($data->ContactoCliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TipoTrabajo')); ?>:</b>
	<?php echo CHtml::encode($data->TipoTrabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Problema')); ?>:</b>
	<?php echo CHtml::encode($data->Problema); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Trabajo')); ?>:</b>
	<?php echo CHtml::encode($data->Trabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->Observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InstalacionesDatosContrato')); ?>:</b>
	<?php echo CHtml::encode($data->InstalacionesDatosContrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NroContrato')); ?>:</b>
	<?php echo CHtml::encode($data->NroContrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nivel')); ?>:</b>
	<?php echo CHtml::encode($data->Nivel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaReprog')); ?>:</b>
	<?php echo CHtml::encode($data->FechaReprog); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HoraReprog')); ?>:</b>
	<?php echo CHtml::encode($data->HoraReprog); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DesdeReprog')); ?>:</b>
	<?php echo CHtml::encode($data->DesdeReprog); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HastaReprog')); ?>:</b>
	<?php echo CHtml::encode($data->HastaReprog); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MotivoReprog')); ?>:</b>
	<?php echo CHtml::encode($data->MotivoReprog); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ContactoReprog')); ?>:</b>
	<?php echo CHtml::encode($data->ContactoReprog); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Finalizada')); ?>:</b>
	<?php echo CHtml::encode($data->Finalizada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Visitada')); ?>:</b>
	<?php echo CHtml::encode($data->Visitada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CambioDealer')); ?>:</b>
	<?php echo CHtml::encode($data->CambioDealer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pendiente')); ?>:</b>
	<?php echo CHtml::encode($data->Pendiente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MarcaLiq')); ?>:</b>
	<?php echo CHtml::encode($data->MarcaLiq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaMarca')); ?>:</b>
	<?php echo CHtml::encode($data->FechaMarca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Liquidada')); ?>:</b>
	<?php echo CHtml::encode($data->Liquidada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaLiq')); ?>:</b>
	<?php echo CHtml::encode($data->FechaLiq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LiquidadaV')); ?>:</b>
	<?php echo CHtml::encode($data->LiquidadaV); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaLiqV')); ?>:</b>
	<?php echo CHtml::encode($data->FechaLiqV); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cobrada')); ?>:</b>
	<?php echo CHtml::encode($data->Cobrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Monto')); ?>:</b>
	<?php echo CHtml::encode($data->Monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MontoTotal')); ?>:</b>
	<?php echo CHtml::encode($data->MontoTotal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Reclamada')); ?>:</b>
	<?php echo CHtml::encode($data->Reclamada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MontoReclamado')); ?>:</b>
	<?php echo CHtml::encode($data->MontoReclamado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Presentada')); ?>:</b>
	<?php echo CHtml::encode($data->Presentada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rechazada')); ?>:</b>
	<?php echo CHtml::encode($data->Rechazada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MotivoRechazo')); ?>:</b>
	<?php echo CHtml::encode($data->MotivoRechazo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PagadoXTrabajo')); ?>:</b>
	<?php echo CHtml::encode($data->PagadoXTrabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PagTADT')); ?>:</b>
	<?php echo CHtml::encode($data->PagTADT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PagadoXMaterial')); ?>:</b>
	<?php echo CHtml::encode($data->PagadoXMaterial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PagMADT')); ?>:</b>
	<?php echo CHtml::encode($data->PagMADT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PagadoXKm')); ?>:</b>
	<?php echo CHtml::encode($data->PagadoXKm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PagKADT')); ?>:</b>
	<?php echo CHtml::encode($data->PagKADT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HoraInicio')); ?>:</b>
	<?php echo CHtml::encode($data->HoraInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HoraFin')); ?>:</b>
	<?php echo CHtml::encode($data->HoraFin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DescripcionTareas')); ?>:</b>
	<?php echo CHtml::encode($data->DescripcionTareas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MaterialesIndirectos')); ?>:</b>
	<?php echo CHtml::encode($data->MaterialesIndirectos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KmRecorridos')); ?>:</b>
	<?php echo CHtml::encode($data->KmRecorridos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TiempoViaje')); ?>:</b>
	<?php echo CHtml::encode($data->TiempoViaje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
	<?php echo CHtml::encode($data->Estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SCalidad')); ?>:</b>
	<?php echo CHtml::encode($data->SCalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Levantada')); ?>:</b>
	<?php echo CHtml::encode($data->Levantada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SinAlta')); ?>:</b>
	<?php echo CHtml::encode($data->SinAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LEF')); ?>:</b>
	<?php echo CHtml::encode($data->LEF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LFF')); ?>:</b>
	<?php echo CHtml::encode($data->LFF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PeriodoLiqEF')); ?>:</b>
	<?php echo CHtml::encode($data->PeriodoLiqEF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PeriodoLiqFF')); ?>:</b>
	<?php echo CHtml::encode($data->PeriodoLiqFF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CostoExtra')); ?>:</b>
	<?php echo CHtml::encode($data->CostoExtra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FaltaMaterial')); ?>:</b>
	<?php echo CHtml::encode($data->FaltaMaterial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DescripcionFaltante')); ?>:</b>
	<?php echo CHtml::encode($data->DescripcionFaltante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RepQuien')); ?>:</b>
	<?php echo CHtml::encode($data->RepQuien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdMarca')); ?>:</b>
	<?php echo CHtml::encode($data->IdMarca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdLiq')); ?>:</b>
	<?php echo CHtml::encode($data->IdLiq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdModif')); ?>:</b>
	<?php echo CHtml::encode($data->IdModif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdFinal')); ?>:</b>
	<?php echo CHtml::encode($data->IdFinal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdAlta')); ?>:</b>
	<?php echo CHtml::encode($data->IdAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Baja')); ?>:</b>
	<?php echo CHtml::encode($data->Baja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mail')); ?>:</b>
	<?php echo CHtml::encode($data->Mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MatInstalados')); ?>:</b>
	<?php echo CHtml::encode($data->MatInstalados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MatRepuesto')); ?>:</b>
	<?php echo CHtml::encode($data->MatRepuesto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DescLiq')); ?>:</b>
	<?php echo CHtml::encode($data->DescLiq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DescLiqInt')); ?>:</b>
	<?php echo CHtml::encode($data->DescLiqInt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DeskKM')); ?>:</b>
	<?php echo CHtml::encode($data->DeskKM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ObservacionMat')); ?>:</b>
	<?php echo CHtml::encode($data->ObservacionMat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NumeroLiquidacion')); ?>:</b>
	<?php echo CHtml::encode($data->NumeroLiquidacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LiquidadaT')); ?>:</b>
	<?php echo CHtml::encode($data->LiquidadaT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EnvioMat')); ?>:</b>
	<?php echo CHtml::encode($data->EnvioMat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EnvioOK')); ?>:</b>
	<?php echo CHtml::encode($data->EnvioOK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaEnvio')); ?>:</b>
	<?php echo CHtml::encode($data->FechaEnvio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RemitoOpTec')); ?>:</b>
	<?php echo CHtml::encode($data->RemitoOpTec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RemitoManual')); ?>:</b>
	<?php echo CHtml::encode($data->RemitoManual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nomenclatura')); ?>:</b>
	<?php echo CHtml::encode($data->Nomenclatura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Adicionales')); ?>:</b>
	<?php echo CHtml::encode($data->Adicionales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cableados')); ?>:</b>
	<?php echo CHtml::encode($data->Cableados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PuntoVenta')); ?>:</b>
	<?php echo CHtml::encode($data->PuntoVenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NumeroChip')); ?>:</b>
	<?php echo CHtml::encode($data->NumeroChip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EmpresaTel')); ?>:</b>
	<?php echo CHtml::encode($data->EmpresaTel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NroOT')); ?>:</b>
	<?php echo CHtml::encode($data->NroOT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDadic')); ?>:</b>
	<?php echo CHtml::encode($data->IDadic); ?>
	<br />

	*/ ?>

</div>