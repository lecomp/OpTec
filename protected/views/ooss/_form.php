<?php
/* @var $this OossController */
/* @var $model Ooss */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ooss-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NroPedido'); ?>
		<?php echo $form->textField($model,'NroPedido',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'NroPedido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Instancia'); ?>
		<?php echo $form->textField($model,'Instancia',array('size'=>20,'maxlength'=>20)); ?>
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
		<?php echo $form->labelEx($model,'ContactoCliente'); ?>
		<?php echo $form->textField($model,'ContactoCliente',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ContactoCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TipoTrabajo'); ?>
		<?php echo $form->textField($model,'TipoTrabajo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'TipoTrabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Problema'); ?>
		<?php echo $form->textArea($model,'Problema',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Problema'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Trabajo'); ?>
		<?php echo $form->textArea($model,'Trabajo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Trabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Observaciones'); ?>
		<?php echo $form->textArea($model,'Observaciones',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Observaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InstalacionesDatosContrato'); ?>
		<?php echo $form->textArea($model,'InstalacionesDatosContrato',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'InstalacionesDatosContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NroContrato'); ?>
		<?php echo $form->textField($model,'NroContrato',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'NroContrato'); ?>
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
		<?php echo $form->textArea($model,'MotivoReprog',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'MotivoReprog'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ContactoReprog'); ?>
		<?php echo $form->textArea($model,'ContactoReprog',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ContactoReprog'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Visitada'); ?>
		<?php echo $form->textField($model,'Visitada',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'Visitada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DescripcionTareas'); ?>
		<?php echo $form->textArea($model,'DescripcionTareas',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'DescripcionTareas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KmRecorridos'); ?>
		<?php echo $form->textField($model,'KmRecorridos',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'KmRecorridos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estado'); ?>
		<?php echo $form->textField($model,'Estado',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'Estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Baja'); ?>
		<?php echo $form->textField($model,'Baja'); ?>
		<?php echo $form->error($model,'Baja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MatInstalados'); ?>
		<?php echo $form->textArea($model,'MatInstalados',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'MatInstalados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ObservacionMat'); ?>
		<?php echo $form->textArea($model,'ObservacionMat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ObservacionMat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NroOT'); ?>
		<?php echo $form->textField($model,'NroOT',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'NroOT'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Editar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->