<?php
/* @var $this OossController */
/* @var $model Ooss */

$this->breadcrumbs=array(
	'OTs'=>array('index'),
	$model->IdOS=>array('view','id'=>$model->IdOS),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar OTs', 'url'=>array('index')),
	array('label'=>'Crear OTs', 'url'=>array('create')),
	array('label'=>'Ver OTs', 'url'=>array('view', 'id'=>$model->IdOS)),
	array('label'=>'Administrar OTs', 'url'=>array('admin')),
);
?>

<h1>Editar OTs <?php echo $model->NroPedido; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>