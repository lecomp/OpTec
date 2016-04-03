<?php
/* @var $this InstaladorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Instaladores',
);

$this->menu=array(
	array('label'=>'Crear Instaladores', 'url'=>array('create')),
	array('label'=>'Administrar Instaladores', 'url'=>array('admin')),
);
?>

<h1>Instaladores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
