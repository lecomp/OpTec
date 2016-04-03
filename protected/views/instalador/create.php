<?php
/* @var $this InstaladorController */
/* @var $model Instalador */

$this->breadcrumbs=array(
	'Instaladores'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Instaladores', 'url'=>array('index')),
	array('label'=>'Administrar Instaladores', 'url'=>array('admin')),
);
?>

<h1>Crear Instalador</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>