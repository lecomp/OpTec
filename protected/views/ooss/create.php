<?php
/* @var $this OossController */
/* @var $model Ooss */

$this->breadcrumbs=array(
	'OTs'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar OTs', 'url'=>array('index')),
	array('label'=>'Administrar OTs', 'url'=>array('admin')),
);
?>

<h1>Crear OTs</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>