<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clientes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IdCliente'); ?>
		<?php echo $form->textField($model,'IdCliente'); ?>
		<?php echo $form->error($model,'IdCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliNombre'); ?>
		<?php echo $form->textField($model,'CliNombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CliNombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NroCliente'); ?>
		<?php echo $form->textField($model,'NroCliente',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'NroCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliDomicilio'); ?>
		<?php echo $form->textArea($model,'CliDomicilio',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'CliDomicilio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliEntre'); ?>
		<?php echo $form->textArea($model,'CliEntre',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'CliEntre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliLocalidad'); ?>
		<?php echo $form->textArea($model,'CliLocalidad',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'CliLocalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliBarrio'); ?>
		<?php echo $form->textArea($model,'CliBarrio',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'CliBarrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliProvincia'); ?>
		<?php echo $form->textArea($model,'CliProvincia',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'CliProvincia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliTelFijo'); ?>
		<?php echo $form->textArea($model,'CliTelFijo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'CliTelFijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliTelMovil'); ?>
		<?php echo $form->textArea($model,'CliTelMovil',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'CliTelMovil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliContacto'); ?>
		<?php echo $form->textArea($model,'CliContacto',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'CliContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CliTelContacto'); ?>
		<?php echo $form->textArea($model,'CliTelContacto',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'CliTelContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Baja'); ?>
		<?php echo $form->textField($model,'Baja'); ?>
		<?php echo $form->error($model,'Baja'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->