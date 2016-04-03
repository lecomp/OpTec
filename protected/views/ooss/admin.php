<?php
/* @var $this OossController */
/* @var $model Ooss */

$this->breadcrumbs=array(
	'OTs'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar OTs', 'url'=>array('index')),
	array('label'=>'Crear OTs', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ooss-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar OTs</h1>

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
	'id'=>'ooss-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'IdOS',
		'NroPedido',
		'Instancia',
		'IdCliente',
		'IdInstalador',
		'IdEmpresa',
		//'FechaRecepcion',
		//'HDesde',
		//'HHasta',
		'FechaProgramada',
		'HoraProgramada',
		//'ContactoCliente',
		'TipoTrabajo',
		'Problema',
		//'Trabajo',
		//'Observaciones',
		//'InstalacionesDatosContrato',
		//'NroContrato',
		//'FechaReprog',
		//'HoraReprog',
		//'DesdeReprog',
		//'HastaReprog',
		//'MotivoReprog',
		//'ContactoReprog',
		//'Visitada',
		//'DescripcionTareas',
		'Estado',
		//'Baja',
		//'MatInstalados',
		//'ObservacionMat',
		'NroOT',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
