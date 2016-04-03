<?php
/* @var $this MaterialesController */
/* @var $model Materiales */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'materiales-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdEmpresa'); ?>
		<?php echo $form->textField($model,'IdEmpresa'); ?>
		<?php echo $form->error($model,'IdEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CodigoInt'); ?>
		<?php echo $form->textField($model,'CodigoInt',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'CodigoInt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CodigoExt'); ?>
		<?php echo $form->textField($model,'CodigoExt',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'CodigoExt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Marca'); ?>
		<?php echo $form->textField($model,'Marca',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Marca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Modelo'); ?>
		<?php echo $form->textField($model,'Modelo',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'StockGeneral'); ?>
		<?php echo $form->textField($model,'StockGeneral'); ?>
		<?php echo $form->error($model,'StockGeneral'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'StockReal'); ?>
		<?php echo $form->textField($model,'StockReal'); ?>
		<?php echo $form->error($model,'StockReal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'StockMinimo'); ?>
		<?php echo $form->textField($model,'StockMinimo'); ?>
		<?php echo $form->error($model,'StockMinimo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UsoMax'); ?>
		<?php echo $form->textField($model,'UsoMax'); ?>
		<?php echo $form->error($model,'UsoMax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Costo'); ?>
		<?php echo $form->textField($model,'Costo'); ?>
		<?php echo $form->error($model,'Costo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Editar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->