<?php
/* @var $this MaterialesController */
/* @var $model Materiales */

$this->breadcrumbs=array(
	'Materiales'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Materiales', 'url'=>array('index')),
	array('label'=>'Administrar Materiales', 'url'=>array('admin')),
);
?>

<h1>Crear Materiales</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>