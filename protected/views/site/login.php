<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Ingreso';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Ingreso</h1>

<p>Por favor, rellene el siguiente formulario con sus datos de acceso al sistema :</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

    <div class="row">
<!--		--><?php //echo $form->labelEx($model,'username'); ?>
		<label for="LoginForm_username" class="required">Usuario <span class="required">*</span></label>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
<!--		--><?php //echo $form->labelEx($model,'password'); ?>
		<label for="LoginForm_password" class="required">Clave <span class="required">*</span></label>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
			Ayuda: Usted puede ingresar con <kbd>demo</kbd>/<kbd>demo</kbd> o <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
<!--		--><?php //echo $form->label($model,'rememberMe'); ?>
		<label for="LoginForm_rememberMe" class="required">Recuerdame la proxima vez <span class="required">*</span></label>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Ingresar'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
