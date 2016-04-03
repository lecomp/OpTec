<?php
/* @var $this MaterialesController */
/* @var $model Materiales */

$this->breadcrumbs=array(
	'Materiales'=>array('index'),
	$model->IDMateriales,
);

$this->menu=array(
	array('label'=>'Listar Materiales', 'url'=>array('index')),
	array('label'=>'Crear Materiales', 'url'=>array('create')),
	array('label'=>'Editar Materiales', 'url'=>array('update', 'id'=>$model->IDMateriales)),
	array('label'=>'Borrar Materiales', 'url'=>'#', 'linkOptions'=>array('submit'=>array('borrar','id'=>$model->IDMateriales),'confirm'=>'Esta usted seguro que desea borrar este item?')),
	array('label'=>'Administrar Materiales', 'url'=>array('admin')),
);
?>

<h1>Ver Materiales #<?php echo $model->Descripcion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDMateriales',
		'Descripcion',
		'IdEmpresa',
		'CodigoInt',
		'CodigoExt',
		'Marca',
		'Modelo',
		'StockGeneral',
		'StockReal',
		'StockMinimo',
		'UsoMax',
		'Costo',
	),
)); ?>
