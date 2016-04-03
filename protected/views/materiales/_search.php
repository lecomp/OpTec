<?php
/* @var $this MaterialesController */
/* @var $model Materiales */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDMateriales'); ?>
		<?php echo $form->textField($model,'IDMateriales'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IdEmpresa'); ?>
		<?php echo $form->textField($model,'IdEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CodigoInt'); ?>
		<?php echo $form->textField($model,'CodigoInt',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CodigoExt'); ?>
		<?php echo $form->textField($model,'CodigoExt',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Marca'); ?>
		<?php echo $form->textField($model,'Marca',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Modelo'); ?>
		<?php echo $form->textField($model,'Modelo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'StockGeneral'); ?>
		<?php echo $form->textField($model,'StockGeneral'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'StockReal'); ?>
		<?php echo $form->textField($model,'StockReal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'StockMinimo'); ?>
		<?php echo $form->textField($model,'StockMinimo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UsoMax'); ?>
		<?php echo $form->textField($model,'UsoMax'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Costo'); ?>
		<?php echo $form->textField($model,'Costo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->