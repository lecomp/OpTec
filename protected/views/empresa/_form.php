<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'IdEmpresa'); ?>
<!--		--><?php //echo $form->textField($model,'IdEmpresa'); ?>
<!--		--><?php //echo $form->error($model,'IdEmpresa'); ?>
<!--	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'EmpNombre'); ?>
		<?php echo $form->textField($model,'EmpNombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'EmpNombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpDomicilio'); ?>
		<?php echo $form->textField($model,'EmpDomicilio',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'EmpDomicilio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpBarrio'); ?>
		<?php echo $form->textField($model,'EmpBarrio',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'EmpBarrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpProvincia'); ?>
		<?php echo $form->textField($model,'EmpProvincia',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'EmpProvincia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpPais'); ?>
		<?php echo $form->textField($model,'EmpPais',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'EmpPais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpCP'); ?>
		<?php echo $form->textField($model,'EmpCP',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'EmpCP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpMail'); ?>
		<?php echo $form->textField($model,'EmpMail',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'EmpMail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpTelefono'); ?>
		<?php echo $form->textField($model,'EmpTelefono',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'EmpTelefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpContacto'); ?>
		<?php echo $form->textField($model,'EmpContacto',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'EmpContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpCargoContacto'); ?>
		<?php echo $form->textField($model,'EmpCargoContacto',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'EmpCargoContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmpCUIT'); ?>
		<?php echo $form->textField($model,'EmpCUIT',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'EmpCUIT'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->