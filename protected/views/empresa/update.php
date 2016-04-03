<?php
/* @var $this EmpresaController */
/* @var $model Empresa */

$this->breadcrumbs=array(
	'Empresa'=>array('index'),
	$model->IdEmpresa=>array('view','id'=>$model->IdEmpresa),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Empresa', 'url'=>array('index')),
	array('label'=>'Crear Empresa', 'url'=>array('create')),
	array('label'=>'Ver Empresa', 'url'=>array('view', 'id'=>$model->IdEmpresa)),
	array('label'=>'Administrar Empresa', 'url'=>array('admin')),
);
?>

<h1>Modificar Empresa <?php echo $model->EmpNombre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>