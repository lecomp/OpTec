<?php
/* @var $this InstaladorController */
/* @var $model Instalador */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDInstalador'); ?>
		<?php echo $form->textField($model,'IDInstalador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InstNombre'); ?>
		<?php echo $form->textField($model,'InstNombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InstEmpresa'); ?>
		<?php echo $form->textField($model,'InstEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InstDomicilio'); ?>
		<?php echo $form->textField($model,'InstDomicilio',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InstTelefono'); ?>
		<?php echo $form->textField($model,'InstTelefono',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Usuario'); ?>
		<?php echo $form->textField($model,'Usuario',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Clave'); ?>
		<?php echo $form->textField($model,'Clave',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NivelAcceso'); ?>
		<?php echo $form->textField($model,'NivelAcceso',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Foto'); ?>
		<?php echo $form->textField($model,'Foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Legajo'); ?>
		<?php echo $form->textField($model,'Legajo',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaIngreso'); ?>
		<?php echo $form->textField($model,'FechaIngreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CuentaSueldo'); ?>
		<?php echo $form->textField($model,'CuentaSueldo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CuentaBanco'); ?>
		<?php echo $form->textField($model,'CuentaBanco',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FormaPago'); ?>
		<?php echo $form->textField($model,'FormaPago',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TipoInstalador'); ?>
		<?php echo $form->textField($model,'TipoInstalador',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FTrabajo'); ?>
		<?php echo $form->textField($model,'FTrabajo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FMaterial'); ?>
		<?php echo $form->textField($model,'FMaterial',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FKm'); ?>
		<?php echo $form->textField($model,'FKm',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NivelCobranza'); ?>
		<?php echo $form->textField($model,'NivelCobranza',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDSupervisor'); ?>
		<?php echo $form->textField($model,'IDSupervisor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Baja'); ?>
		<?php echo $form->textField($model,'Baja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PermisoWeb'); ?>
		<?php echo $form->textField($model,'PermisoWeb'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->