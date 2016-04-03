<?php
/* @var $this MaterialesController */
/* @var $model Materiales */

$this->breadcrumbs=array(
	'Materiales'=>array('index'),
	$model->IDMateriales=>array('view','id'=>$model->IDMateriales),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Materiales', 'url'=>array('index')),
	array('label'=>'Crear Materiales', 'url'=>array('create')),
	array('label'=>'Ver Materiales', 'url'=>array('view', 'id'=>$model->IDMateriales)),
	array('label'=>'Administrar Materiales', 'url'=>array('admin')),
);
?>

<h1>Editar Materiales <?php echo $model->Descripcion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>