<?php
/* @var $this InstaladorController */
/* @var $model Instalador */

$this->breadcrumbs=array(
	'Instaladores'=>array('index'),
	$model->IDInstalador,
);

$this->menu=array(
	array('label'=>'Listar Instaladores', 'url'=>array('index')),
	array('label'=>'Crear Instaladores', 'url'=>array('create')),
	array('label'=>'Editar Instaladores', 'url'=>array('update', 'id'=>$model->IDInstalador)),
	array('label'=>'Borrar Instaladores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('Borrar','id'=>$model->IDInstalador),'confirm'=>'Esta usted seguro de querer borrar este item?')),
	array('label'=>'Administrar Instaladores', 'url'=>array('admin')),
);
?>

<h1>Ver Instalador #<?php echo $model->InstNombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDInstalador',
		'InstNombre',
		'InstEmpresa',
		'InstDomicilio',
		'InstTelefono',
		'Usuario',
		'Clave',
		'NivelAcceso',
		'Foto',
		'Legajo',
		'FechaIngreso',
		'CuentaSueldo',
		'CuentaBanco',
		'FormaPago',
		'TipoInstalador',
		'FTrabajo',
		'FMaterial',
		'FKm',
		'NivelCobranza',
		'IDSupervisor',
		'Baja',
		'PermisoWeb',
	),
)); ?>
