<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 18/03/16
 * Time: 02:00
 */
/* @var $this OossController */
/* @var $model Ooss */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
    )); ?>

    <div class="row">
        <?php echo $form->label($model,'IdOS'); ?>
        <?php echo $form->textField($model,'IdOS'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'NroPedido'); ?>
        <?php echo $form->textField($model,'NroPedido',array('size'=>13,'maxlength'=>13)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'Instancia'); ?>
<!--        --><?php //echo $form->textField($model,'Instancia',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo CHtml::link(CHtml::encode($model->Instancia), array('verot', 'id'=>$model->IdOS)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'IdCliente'); ?>
        <?php echo $form->textField($model,'IdCliente'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'IdInstalador'); ?>
        <?php echo $form->textField($model,'IdInstalador'); ?>
<!--        --><?php //echo $form->textField($model,'IdInstalador'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'IdEmpresa'); ?>
        <?php echo $form->textField($model,'IdEmpresa'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'FechaRecepcion'); ?>
        <?php echo $form->textField($model,'FechaRecepcion'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'HDesde'); ?>
        <?php echo $form->textField($model,'HDesde'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'HHasta'); ?>
        <?php echo $form->textField($model,'HHasta'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'FechaProgramada'); ?>
        <?php echo $form->textField($model,'FechaProgramada'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'HoraProgramada'); ?>
        <?php echo $form->textField($model,'HoraProgramada'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'ContactoCliente'); ?>
        <?php echo $form->textField($model,'ContactoCliente',array('size'=>50,'maxlength'=>50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'TipoTrabajo'); ?>
        <?php echo $form->textField($model,'TipoTrabajo',array('size'=>10,'maxlength'=>10)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'Problema'); ?>
        <?php echo $form->textArea($model,'Problema',array('rows'=>6, 'cols'=>50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'Trabajo'); ?>
        <?php echo $form->textArea($model,'Trabajo',array('rows'=>6, 'cols'=>50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'Observaciones'); ?>
        <?php echo $form->textArea($model,'Observaciones',array('rows'=>6, 'cols'=>50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'InstalacionesDatosContrato'); ?>
        <?php echo $form->textArea($model,'InstalacionesDatosContrato',array('rows'=>6, 'cols'=>50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'NroContrato'); ?>
        <?php echo $form->textField($model,'NroContrato',array('size'=>18,'maxlength'=>18)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'FechaReprog'); ?>
        <?php echo $form->textField($model,'FechaReprog'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'HoraReprog'); ?>
        <?php echo $form->textField($model,'HoraReprog'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'DesdeReprog'); ?>
        <?php echo $form->textField($model,'DesdeReprog'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'HastaReprog'); ?>
        <?php echo $form->textField($model,'HastaReprog'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'MotivoReprog'); ?>
        <?php echo $form->textArea($model,'MotivoReprog',array('rows'=>6, 'cols'=>50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'ContactoReprog'); ?>
        <?php echo $form->textArea($model,'ContactoReprog',array('rows'=>6, 'cols'=>50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'Visitada'); ?>
        <?php echo $form->textField($model,'Visitada',array('size'=>18,'maxlength'=>18)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'DescripcionTareas'); ?>
        <?php echo $form->textArea($model,'DescripcionTareas',array('rows'=>6, 'cols'=>50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'KmRecorridos'); ?>
        <?php echo $form->textField($model,'KmRecorridos',array('size'=>18,'maxlength'=>18)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'Estado'); ?>
        <?php echo $form->textField($model,'Estado',array('size'=>12,'maxlength'=>12)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'Baja'); ?>
        <?php echo $form->textField($model,'Baja'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'MatInstalados'); ?>
        <?php echo $form->textArea($model,'MatInstalados',array('rows'=>6, 'cols'=>50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'ObservacionMat'); ?>
        <?php echo $form->textArea($model,'ObservacionMat',array('rows'=>6, 'cols'=>50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'NroOT'); ?>
        <?php echo $form->textField($model,'NroOT',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Buscar'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->