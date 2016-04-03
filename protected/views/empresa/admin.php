<?php
/* @var $this EmpresaController */
/* @var $model Empresa */

$this->breadcrumbs=array(
	'Empresa'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista Empresa', 'url'=>array('index')),
	array('label'=>'Crear Empresa', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#empresa-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Empresa</h1>

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
	'id'=>'empresa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'IdEmpresa',
		'EmpNombre',
		'EmpDomicilio',
		'EmpBarrio',
		'EmpProvincia',
		'EmpPais',
		/*
		'EmpCP',
		'EmpMail',
		'EmpTelefono',
		'EmpContacto',
		'EmpCargoContacto',
		'EmpCUIT',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
