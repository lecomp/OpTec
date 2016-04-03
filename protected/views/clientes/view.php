<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->IdCliente,
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('index')),
	array('label'=>'Crear Clientes', 'url'=>array('create')),
	array('label'=>'Editar Clientes', 'url'=>array('update', 'id'=>$model->IdCliente)),
	array('label'=>'Borrar Clientes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('Borrar','id'=>$model->IdCliente),'confirm'=>'Esta usted seguro de borrar este item?')),
	array('label'=>'Administrar Clientes', 'url'=>array('admin')),
);
?>

<h1>Ver Clientes #<?php echo $model->IdCliente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IdCliente',
		'CliNombre',
		'NroCliente',
		'CliDomicilio',
		'CliEntre',
		'CliLocalidad',
		'CliBarrio',
		'CliProvincia',
		'CliTelFijo',
		'CliTelMovil',
		'CliContacto',
		'CliTelContacto',
		'Baja',
	),
)); ?>
