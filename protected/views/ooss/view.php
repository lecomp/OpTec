<?php
/* @var $this OossController */
/* @var $model Ooss */

$this->breadcrumbs=array(
	'OTs'=>array('index'),
	$model->IdOS,
);

$this->menu=array(
	array('label'=>'Listar OTs', 'url'=>array('index')),
	array('label'=>'Crear OTs', 'url'=>array('create')),
	array('label'=>'Editar OTs', 'url'=>array('update', 'id'=>$model->IdOS)),
	array('label'=>'Borrar OTs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('borrar','id'=>$model->IdOS),'confirm'=>'Esta usted seguro que desea borrar este item?')),
	array('label'=>'Administrar OTs', 'url'=>array('admin')),
);
?>

<h1>Ver OTs #<?php echo $model->NroPedido; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IdOS',
		'NroPedido',
		'Instancia',
		'IdCliente',
		'IdInstalador',
		'IdEmpresa',
		'FechaRecepcion',
		'HDesde',
		'HHasta',
		'FechaProgramada',
		'HoraProgramada',
		'ContactoCliente',
		'TipoTrabajo',
		'Problema',
		'Trabajo',
		'Observaciones',
		'InstalacionesDatosContrato',
		'NroContrato',
		'FechaReprog',
		'HoraReprog',
		'DesdeReprog',
		'HastaReprog',
		'MotivoReprog',
		'ContactoReprog',
		'Visitada',
		'DescripcionTareas',
		'KmRecorridos',
		'Estado',
		'Baja',
		'MatInstalados',
		'ObservacionMat',
		'NroOT',
	),
)); ?>
