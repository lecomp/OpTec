<?php
/* @var $this MaterialesController */
/* @var $model Materiales */

$this->breadcrumbs=array(
	'Materiales'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Materiales', 'url'=>array('index')),
	array('label'=>'Crear Materiales', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#materiales-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Materiales</h1>

<p>
	Puede introducir opcionalmente un operador de comparacion (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
	o <b>=</b>) al comienzo de cada uno de los valores de busqueda para especificar la forma en que la comparacion debe hacerse.
</p>

<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'materiales-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'IDMateriales',
		'Descripcion',
		'IdEmpresa',
		'CodigoInt',
		'CodigoExt',
		'Marca',
		/*
		'Modelo',
		'StockGeneral',
		'StockReal',
		'StockMinimo',
		'UsoMax',
		'Costo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
