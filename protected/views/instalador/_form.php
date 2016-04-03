<?php
/* @var $this InstaladorController */
/* @var $model Instalador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'instalador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'InstNombre'); ?>
		<?php echo $form->textField($model,'InstNombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'InstNombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InstEmpresa'); ?>
		<?php echo $form->textField($model,'InstEmpresa'); ?>
		<?php echo $form->error($model,'InstEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InstDomicilio'); ?>
		<?php echo $form->textField($model,'InstDomicilio',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'InstDomicilio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InstTelefono'); ?>
		<?php echo $form->textField($model,'InstTelefono',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'InstTelefono'); ?>
	</div>

<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'Usuario'); ?>
<!--		--><?php //echo $form->textField($model,'Usuario',array('size'=>20,'maxlength'=>20)); ?>
<!--		--><?php //echo $form->error($model,'Usuario'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'Clave'); ?>
<!--		--><?php //echo $form->textField($model,'Clave',array('size'=>20,'maxlength'=>20)); ?>
<!--		--><?php //echo $form->error($model,'Clave'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'NivelAcceso'); ?>
<!--		--><?php //echo $form->textField($model,'NivelAcceso',array('size'=>18,'maxlength'=>18)); ?>
<!--		--><?php //echo $form->error($model,'NivelAcceso'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'Foto'); ?>
<!--		--><?php //echo $form->textField($model,'Foto'); ?>
<!--		--><?php //echo $form->error($model,'Foto'); ?>
<!--	</div>-->

<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'Legajo'); ?>
<!--		--><?php //echo $form->textField($model,'Legajo',array('size'=>15,'maxlength'=>15)); ?>
<!--		--><?php //echo $form->error($model,'Legajo'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'FechaIngreso'); ?>
<!--		--><?php //echo $form->textField($model,'FechaIngreso'); ?>
<!--		--><?php //echo $form->error($model,'FechaIngreso'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'CuentaSueldo'); ?>
<!--		--><?php //echo $form->textField($model,'CuentaSueldo',array('size'=>20,'maxlength'=>20)); ?>
<!--		--><?php //echo $form->error($model,'CuentaSueldo'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'CuentaBanco'); ?>
<!--		--><?php //echo $form->textField($model,'CuentaBanco',array('size'=>20,'maxlength'=>20)); ?>
<!--		--><?php //echo $form->error($model,'CuentaBanco'); ?>
<!--	</div>-->

<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'FormaPago'); ?>
<!--		--><?php //echo $form->textField($model,'FormaPago',array('size'=>15,'maxlength'=>15)); ?>
<!--		--><?php //echo $form->error($model,'FormaPago'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'TipoInstalador'); ?>
<!--		--><?php //echo $form->textField($model,'TipoInstalador',array('size'=>18,'maxlength'=>18)); ?>
<!--		--><?php //echo $form->error($model,'TipoInstalador'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'FTrabajo'); ?>
<!--		--><?php //echo $form->textField($model,'FTrabajo',array('size'=>10,'maxlength'=>10)); ?>
<!--		--><?php //echo $form->error($model,'FTrabajo'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'FMaterial'); ?>
<!--		--><?php //echo $form->textField($model,'FMaterial',array('size'=>10,'maxlength'=>10)); ?>
<!--		--><?php //echo $form->error($model,'FMaterial'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'FKm'); ?>
<!--		--><?php //echo $form->textField($model,'FKm',array('size'=>10,'maxlength'=>10)); ?>
<!--		--><?php //echo $form->error($model,'FKm'); ?>
<!--	</div>-->

<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'NivelCobranza'); ?>
<!--		--><?php //echo $form->textField($model,'NivelCobranza',array('size'=>18,'maxlength'=>18)); ?>
<!--		--><?php //echo $form->error($model,'NivelCobranza'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'IDSupervisor'); ?>
<!--		--><?php //echo $form->textField($model,'IDSupervisor'); ?>
<!--		--><?php //echo $form->error($model,'IDSupervisor'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'Baja'); ?>
<!--		--><?php //echo $form->textField($model,'Baja'); ?>
<!--		--><?php //echo $form->error($model,'Baja'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'PermisoWeb'); ?>
<!--		--><?php //echo $form->textField($model,'PermisoWeb'); ?>
<!--		--><?php //echo $form->error($model,'PermisoWeb'); ?>
<!--	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->