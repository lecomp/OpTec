<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 10/03/16
 * Time: 15:42
 */

/* @var $this OossController */
/* @var $model Ooss */

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

<h1>Datos de OT <?php echo $o->NroPedido; ?></h1>

<!--<h1>Datos de Inst --><?php //echo $o->InstNombre; ?><!--</h1>-->
<!---->
<!--<h1>Datos de Cli --><?php //echo $o->CliNombre; ?><!--</h1>-->

<?php
    //  Control grid con todos los datos, se puede generar un array con cuales campos traer
//    $dataProvider=new CActiveDataProvider('ooss');
//    $this->widget('zii.widgets.grid.CGridView', array(
//    'dataProvider'=>$dataProvider,
//    ));                                                                                                                                                          
    //  Control grid con todos los datos, se puede generar un array con cuales campos traer

    //  Busqueda por criteria por 3 campos, se usa en el search
    //  Me sirve para buscar cliente e instalador para traer los datos
    /*se realizan las comparaciones de los atributos aquí indicados (id, nombre, apellidos)
    con los valores de los mismos atributos del modelo $model que se ha modificado por el GET anteriormente en el controlador */

    //var_dump($o);



//    $dataProvider = new CActiveDataProvider($i, array(
//        'criteria'=>$criteria,
//        //'sort'=>array('defaultOrder'=>'nombre ASC'),      // orden por defecto según el atributo nombre
//        //'pagination'=>array('pageSize'=>4),               // personalizamos la paginación
//    ));                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    

    //var_dump($dataProvider);

?>
<!-- ejemplo otro modelo en un dropdown
<div class=”row”>
    <?php //echo $form->labelEx($model,"instalador"); ?>
    <?php //echo $form->dropDownList($model,"instalador", CHtml::listData(TipoEstadocivil::model()->findAll(array("order" => "InstNombre ASC")), "IdInstalador", "InstNombre"), array("empty"=>"Seleccione el Instalador"));?>
    <?php //echo $form->error($model,"instalador"); ?>
</div>                                                                                                                                                                                                                                                                                                                                                     
-->

<?php //echo $this->renderPartial('_form' array('o'=>$o)); ?>

<?php echo $this->renderPartial('_form_complete', array('o'=>$o, 'i'=>$i, 'c'=>$c)); ?><!--                                                                       -->


