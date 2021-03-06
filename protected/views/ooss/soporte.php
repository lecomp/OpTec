<?php
/* @var $this OossController */
/* @var $model Ooss */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ooss-grid-soporte').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Listado General de Jobs</h1>

<p>
    Puede introducir opcionalmente un operador de comparacion (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    o <b>=</b>) al comienzo de cada uno de los valores de busqueda para especificar la forma en que la comparacion debe hacerse.
</p>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'ooss-grid-soporte',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        array('name'=>'Instancia',
            'type'=>'raw',
            'value'=>'CHtml::link($data->Instancia,array("ooss/buscarot","insta"=>$data->Instancia))                                                              ',),
        array('name'=>'nombre_cliente',
            'value'=>'$data->cliente["CliNombre"]',),
        array('name'=>'provincia_cliente',
            'value'=>'$data->cliente["CliProvincia"]',),
        array('name'=>'nombre_instalador',
            'value'=>'$data->instalador["InstNombre"]',),
        array('name'=>'FechaProgramada',
            'type'=>'raw',
            'value'=>'date("d/m/Y",strtotime($data->FechaProgramada))',),
        array('name'=>'HoraProgramada',
            'type'=>'raw',
            'value'=>'date("H:m:s",strtotime($data->HoraProgramada))',),
        'TipoTrabajo',
        'Estado',
    ),
));
?>
