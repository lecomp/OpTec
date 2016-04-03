<?php
/* @var $this EmpresaController */
/* @var $model Empresa */

$this->breadcrumbs=array(
	'Empresa'=>array('index'),
	$model->IdEmpresa,
);

$this->menu=array(
	array('label'=>'Lista Empresa', 'url'=>array('index')),
	array('label'=>'Crear Empresa', 'url'=>array('create')),
	array('label'=>'Modificar Empresa', 'url'=>array('update', 'id'=>$model->IdEmpresa)),
	array('label'=>'Borrar Empresa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IdEmpresa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Empresa', 'url'=>array('admin')),
);
?>

<h1>Ver Empresa <?php echo $model->EmpNombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
//		'IdEmpresa',
		'EmpNombre',
		'EmpDomicilio',
		'EmpBarrio',
		'EmpProvincia',
		'EmpPais',
		'EmpCP',
		'EmpMail',
		'EmpTelefono',
		'EmpContacto',
		'EmpCargoContacto',
		'EmpCUIT',
	),
)); ?>
