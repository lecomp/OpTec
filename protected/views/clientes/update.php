<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->IdCliente=>array('Ver','id'=>$model->IdCliente),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('index')),
	array('label'=>'Crear Clientes', 'url'=>array('create')),
	array('label'=>'Ver Clientes', 'url'=>array('view', 'id'=>$model->IdCliente)),
	array('label'=>'Administrar Clientes', 'url'=>array('admin')),
);
?>

<h1>Editar Clientes <?php echo $model->IdCliente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>