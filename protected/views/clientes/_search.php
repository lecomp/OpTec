<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IdCliente'); ?>
		<?php echo $form->textField($model,'IdCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CliNombre'); ?>
		<?php echo $form->textField($model,'CliNombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NroCliente'); ?>
		<?php echo $form->textField($model,'NroCliente',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CliDomicilio'); ?>
		<?php echo $form->textArea($model,'CliDomicilio',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CliEntre'); ?>
		<?php echo $form->textArea($model,'CliEntre',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CliLocalidad'); ?>
		<?php echo $form->textArea($model,'CliLocalidad',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CliBarrio'); ?>
		<?php echo $form->textArea($model,'CliBarrio',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CliProvincia'); ?>
		<?php echo $form->textArea($model,'CliProvincia',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CliTelFijo'); ?>
		<?php echo $form->textArea($model,'CliTelFijo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CliTelMovil'); ?>
		<?php echo $form->textArea($model,'CliTelMovil',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CliContacto'); ?>
		<?php echo $form->textArea($model,'CliContacto',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CliTelContacto'); ?>
		<?php echo $form->textArea($model,'CliTelContacto',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Baja'); ?>
		<?php echo $form->textField($model,'Baja'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->