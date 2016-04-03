<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IdEmpresa'); ?>
		<?php echo $form->textField($model,'IdEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EmpNombre'); ?>
		<?php echo $form->textField($model,'EmpNombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EmpDomicilio'); ?>
		<?php echo $form->textField($model,'EmpDomicilio',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EmpBarrio'); ?>
		<?php echo $form->textField($model,'EmpBarrio',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EmpProvincia'); ?>
		<?php echo $form->textField($model,'EmpProvincia',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EmpPais'); ?>
		<?php echo $form->textField($model,'EmpPais',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EmpCP'); ?>
		<?php echo $form->textField($model,'EmpCP',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EmpMail'); ?>
		<?php echo $form->textField($model,'EmpMail',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EmpTelefono'); ?>
		<?php echo $form->textField($model,'EmpTelefono',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EmpContacto'); ?>
		<?php echo $form->textField($model,'EmpContacto',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EmpCargoContacto'); ?>
		<?php echo $form->textField($model,'EmpCargoContacto',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EmpCUIT'); ?>
		<?php echo $form->textField($model,'EmpCUIT',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->