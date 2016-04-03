<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresa-empresa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IdEmpresa'); ?>
		<?php echo $form->textField($model,'IdEmpresa'); ?>
		<?php echo $form->error($model,'IdEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpNombre'); ?>
		<?php echo $form->textField($model,'EmpNombre'); ?>
		<?php echo $form->error($model,'EmpNombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpMail'); ?>
		<?php echo $form->textField($model,'EmpMail'); ?>
		<?php echo $form->error($model,'EmpMail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpContacto'); ?>
		<?php echo $form->textField($model,'EmpContacto'); ?>
		<?php echo $form->error($model,'EmpContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpCargoContacto'); ?>
		<?php echo $form->textField($model,'EmpCargoContacto'); ?>
		<?php echo $form->error($model,'EmpCargoContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpDomicilio'); ?>
		<?php echo $form->textField($model,'EmpDomicilio'); ?>
		<?php echo $form->error($model,'EmpDomicilio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpBarrio'); ?>
		<?php echo $form->textField($model,'EmpBarrio'); ?>
		<?php echo $form->error($model,'EmpBarrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpProvincia'); ?>
		<?php echo $form->textField($model,'EmpProvincia'); ?>
		<?php echo $form->error($model,'EmpProvincia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpPais'); ?>
		<?php echo $form->textField($model,'EmpPais'); ?>
		<?php echo $form->error($model,'EmpPais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpTelefono'); ?>
		<?php echo $form->textField($model,'EmpTelefono'); ?>
		<?php echo $form->error($model,'EmpTelefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpCP'); ?>
		<?php echo $form->textField($model,'EmpCP'); ?>
		<?php echo $form->error($model,'EmpCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpCUIT'); ?>
		<?php echo $form->textField($model,'EmpCUIT'); ?>
		<?php echo $form->error($model,'EmpCUIT'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->