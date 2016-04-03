<?php
/* @var $this InstaladorController */
/* @var $model Instalador */

$this->breadcrumbs=array(
	'Instaladores'=>array('index'),
	$model->IDInstalador=>array('view','id'=>$model->IDInstalador),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Instaladores', 'url'=>array('index')),
	array('label'=>'Crear Instaladores', 'url'=>array('create')),
	array('label'=>'Ver Instaladores', 'url'=>array('view', 'id'=>$model->IDInstalador)),
	array('label'=>'Administrar Instaladores', 'url'=>array('admin')),
);
?>

<h1>Editar Instalador <?php echo $model->InstNombre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>