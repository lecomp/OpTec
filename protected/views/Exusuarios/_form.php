<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IdUsuario'); ?>
		<?php echo $form->textField($model,'IdUsuario'); ?>
		<?php echo $form->error($model,'IdUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clave'); ?>
		<?php echo $form->textField($model,'clave',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'clave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'baja'); ?>
		<?php echo $form->textField($model,'baja',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'baja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'permisoweb'); ?>
		<?php echo $form->textField($model,'permisoweb',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'permisoweb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usrNombre'); ?>
		<?php echo $form->textField($model,'usrNombre',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'usrNombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NivelAcceso'); ?>
		<?php echo $form->textField($model,'NivelAcceso'); ?>
		<?php echo $form->error($model,'NivelAcceso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>160)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'port_winsock'); ?>
		<?php echo $form->textField($model,'port_winsock'); ?>
		<?php echo $form->error($model,'port_winsock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sql_name'); ?>
		<?php echo $form->textField($model,'sql_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sql_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sql_pass'); ?>
		<?php echo $form->textField($model,'sql_pass',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sql_pass'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Editar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->