<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->IdUsuario,
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
	array('label'=>'Editar Usuarios', 'url'=>array('update', 'id'=>$model->IdUsuario)),
	array('label'=>'Borrar Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IdUsuario),'confirm'=>'Esta usted seguro de borrar este item?')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Ver Usuarios #<?php echo $model->usuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IdUsuario',
		'usuario',
		'clave',
		'baja',
		'permisoweb',
		'usrNombre',
		'NivelAcceso',
		'email',
		'port_winsock',
		'sql_name',
		'sql_pass',
	),
)); ?>
