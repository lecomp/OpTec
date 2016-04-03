<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clientes-clientes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IdCliente'); ?>
		<?php echo $form->textField($model,'IdCliente'); ?>
		<?php echo $form->error($model,'IdCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Baja'); ?>
		<?php echo $form->textField($model,'Baja'); ?>
		<?php echo $form->error($model,'Baja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliNombre'); ?>
		<?php echo $form->textField($model,'CliNombre'); ?>
		<?php echo $form->error($model,'CliNombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NroCliente'); ?>
		<?php echo $form->textField($model,'NroCliente'); ?>
		<?php echo $form->error($model,'NroCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliDomicilio'); ?>
		<?php echo $form->textField($model,'CliDomicilio'); ?>
		<?php echo $form->error($model,'CliDomicilio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliEntre'); ?>
		<?php echo $form->textField($model,'CliEntre'); ?>
		<?php echo $form->error($model,'CliEntre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliLocalidad'); ?>
		<?php echo $form->textField($model,'CliLocalidad'); ?>
		<?php echo $form->error($model,'CliLocalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliBarrio'); ?>
		<?php echo $form->textField($model,'CliBarrio'); ?>
		<?php echo $form->error($model,'CliBarrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliProvincia'); ?>
		<?php echo $form->textField($model,'CliProvincia'); ?>
		<?php echo $form->error($model,'CliProvincia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliTelFijo'); ?>
		<?php echo $form->textField($model,'CliTelFijo'); ?>
		<?php echo $form->error($model,'CliTelFijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliTelMovil'); ?>
		<?php echo $form->textField($model,'CliTelMovil'); ?>
		<?php echo $form->error($model,'CliTelMovil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliContacto'); ?>
		<?php echo $form->textField($model,'CliContacto'); ?>
		<?php echo $form->error($model,'CliContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliTelContacto'); ?>
		<?php echo $form->textField($model,'CliTelContacto'); ?>
		<?php echo $form->error($model,'CliTelContacto'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->