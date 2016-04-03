<?php
/* @var $this OossController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'OTs',
);

$this->menu=array(
	array('label'=>'Crear OTs', 'url'=>array('create')),
	array('label'=>'Administrar OTs', 'url'=>array('admin')),
);
?>

<h1>OTs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
