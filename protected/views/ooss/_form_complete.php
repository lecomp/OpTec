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
    // Script ejecucion submit button cambiando action en form
    $('input[type=submit]').click(function() {
        $('form').attr('action', $(this).attr('name'));
        $('form').submit();
    });

    //  Script actualiza la instancia que se busca en el boton
    $('input[name=insta]').keyup(function(){
        $('#Buscar').attr('name','/OpTec/index.php?r=ooss/buscarot&insta='+$('#insta').val());
    });

    // Script cambio id de instalador en select



    $('select[name=selInstalador]').onchange(function(){
        alert('luis');
        var ttt = '/OpTec/index.php?r=ooss/asignar&id='+$('#insta').val()+'&idInst='+$('#selInstalador').val();
        alert(ttt);
        $('#Asignar').attr('name', ttt);
    });




");
?>

<form method="post" action="/" accept-charset="UTF-8" name="soporte_form">
<!--    /OpTec/index.php?r=ooss/admin-->
<div class="form">

<?php //$form=$this->beginWidget('CActiveForm', array(
	//'id'=>'ooss-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	//'enableAjaxValidation'=>false,
//)); ?>

    <h1>Datos de OT #<?php echo $o->NroPedido; ?></h1>

<!-- INICIO FORMATO NUEVO -->
<div id="idos" style="visibility: hidden;"><?php echo $o->IdOS; ?></div>
<div class="span-10">
    <table style="border: double; alignment: center; border-radius: 5px; border-color: #0066cc; padding: 1px; width: 100%; ">
        <tbody>
        <tr style="padding: 0px">
            <td width="100%">
                &nbsp; Datos de la OOSS :
                <table style="border: double; alignment: center; border-radius: 5px; border-color: #0066cc; padding: 0px; width: 100%; ">
                    <tbody>
                    <tr style="padding: 0px;">
                        <td style="padding: 0px" width="120px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 12px;">Nro de OT</span></td>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: center;">
                                <input type="text" value="<?php echo $o->NroOT ; ?>" style="width: 220px;text-align: center;" />
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 12px;">Instancia</span></td>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: center;">
                                <input type="text" value="<?php echo $o->Instancia ; ?>" style="width: 220px;text-align: center;" />
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 12px;">Instalador</span></td>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: center;">
                                <input type="text" value="<?php echo $i->InstNombre ; ?>" style="width: 220px;text-align: center;" />
                            </span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                &nbsp; Datos del Cliente :
                <table style="border: double; alignment: center; border-radius: 5px; border-color: #0066cc; padding: 1px; width: 100%; ">
                    <tbody>
                    <tr style="padding: 0px;">
                        <td style="padding: 0px" width="120px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 12px;">Nombre</span></td>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: center;">
                                <input type="text" value="<?php echo trim($c->CliNombre) ; ?>" style="width: 220px;text-align: center;" />
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 12px;">Cuenta</span></td>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: center;">
                                <input type="text" value="<?php echo trim($c->NroCliente) ; ?>" style="width: 220px;text-align: center;" />
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 12px;">Direccion</span></td>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: center;">
                                <input type="text" value="<?php echo trim($c->CliDomicilio)." - ".trim($c->CliLocalidad) ; ?>" style="width: 220px;text-align: center;" />
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0px;vertical-align: top;padding-top: 5px;"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;vertical-align:top;padding: 0px;padding-left: 12px;">Entre calles (Loc)</span></td>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: center;">
                                <input type="text" value="<?php echo $c->CliEntre ; ?>" style="width: 220px;height: 30px;text-align: left;" />
                            </span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr style="padding: 0px">
            <td>
                &nbsp; Programación :
                <table style="border: double; alignment: center; border-radius: 5px; border-color: #0066cc; padding: 1px; width: 100%; ">
                    <tbody>
                    <tr>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 12px;">Fecha Recepcion</span></td>
                        <td colspan="3" align="center"><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: center;"><input type="text" value="
                            <?php
                                if (trim(date_create($o->FechaRecepcion)->format("d/m/Y")) == "30/11/-0001"){
                                    echo "---";
                                }else{
                                    echo trim(date_create($o->FechaRecepcion)->format("d/m/Y"));
                                }
                            ?>
                        " style="width: 220px;text-align: center;" /></span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 12px;">Desde</span></td>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: left;" align="center"><input type="text" value="
                            <?php echo trim(date_create($o->HDesde)->format("H:i:s")); ?>
                        " style="width: 80px;text-align: center;" /></span>
                        </td>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 0px;" align="center">Hasta</span></td>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: left;"><input type="text" value="
                            <?php echo trim(date_create($o->HHasta)->format("H:i:s")); ?>
                        " style="width: 80px;text-align: center;" /></span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 12px;" align="center">Fecha Prg</span></td>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: left;"><input type="text" value="
                            <?php
                                if (trim(date_create($o->FechaProgramada)->format("d/m/Y")) == "30/11/-0001                     "){
                                    echo "---";
                                }else{
                                    echo trim(date_create($o->FechaProgramada)->format("d/m/Y"));
                                }
                            ?>
                        " style="width: 80px;text-align: center;" /></span>
                        </td>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 0px;" align="center">Hora Prg</span></td>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: left;"><input type="text" value="
                            <?php echo trim(date_create($o->HoraProgramada)->format("H:i:s")); ?>
                        " style="width: 80px;text-align: center;" /></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr style="padding: 0px">
            <td>
                &nbsp; Reprogramación :
                <table style="border: double; alignment: center; border-radius: 5px; border-color: #0066cc; padding: 1px; width: 100%; ">
                    <tbody>
                    <tr>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 12px;">Fecha</span></td>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: left;" align="center"><input type="text" value="
                            <?php
                                if (trim(date_create($o->FechaReprog)->format("d/m/Y")) == "30/11/-0001                     "){
                                    echo "---";
                                }else{
                                    echo trim(date_create($o->FechaReprog)->format("d/m/Y"));
                                }
                            ?>
                        " style="width: 80px;text-align: center;" /></span>
                        </td>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 0px;" align="center">Hora</span></td>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: left;"><input type="text" value="
                                <?php echo trim(date_create($o->HoraReprog)->format("H:i:s")); ?>
                            " style="width: 80px;text-align: center;" /></span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0px;vertical-align: top;padding-top: 5px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 12px;">Motivo</span></td>
                        <td style="padding: 0px" colspan="3"><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: center;">
                                <input type="text" value="<?php echo trim($o->MotivoReprog) ; ?>" style="width: 280px;height: 30px;text-align: left;" />
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 12px;">Contacto</span></td>
                        <td colspan="3" align="right"><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: right;"><input type="text" value="
                            <?php echo trim($o->ContactoReprog); ?>
                        " style="width: 260px;text-align: center;" /></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class="span-10">
    <table style="border: double; alignment: center; border-radius: 5px; border-color: #0066cc; padding: 1px; width: 100%;" >
        <tbody>
        <tr>
            <td width="100%">
                &nbsp; Descripcion general del trabajo realizado :
                <table style="border: double; alignment: center; border-radius: 5px; border-color: #0066cc; padding: 1px; width: 100%; ">
                    <tbody>
                    <tr>
                        <td>
                            <table align="center" border="1" cellpadding="1" cellspacing="1" height="28" width="175">
                                <tbody>
                                <tr>
                                    <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 12px;">Tipo</span></td>
                                    <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: left;" align="center"><input type="text" value="
                                        <?php echo trim($o->TipoTrabajo); ?>
                                    " style="width: 80px;text-align: center;" /></span>
                                    </td>
                                    <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 0px;" align="center">Estado</span></td>
                                    <td style="padding: 0px"><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: left;"><input type="text" value="
                                        <?php echo trim($o->Estado); ?>
                                    " style="width: 80px;text-align: center;" /></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table align="center" border="1" cellpadding="1" cellspacing="1" height="28" width="175">
                                <tbody>
                                <tr>
                                    <td style="padding: 0px;vertical-align: top;padding-top: 5px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 12px;">Problema</span></td>
                                </tr>
                                <tr>
                                    <td style="padding: 0px" ><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: left;">
                                        <input type="text" value="
                                        <?php $a = $o->Problema; echo "PRUEBA" ; ?>
                                        " style="width: 330px;height: 93px;text-align: left;" align="left"/>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 0px;vertical-align: top;padding-top: 5px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 12px;">Solucion</span></td>
                                </tr>
                                <tr>
                                    <td style="padding: 0px" ><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;">
                                        <input type="text" value="
                                        <?php echo trim($o->Trabajo) ; ?>
                                        " style="width: 330px;height: 93px;text-align: left;" />
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 0px;vertical-align: top;padding-top: 5px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 12px;">Descripcion de trabajo realizado</span></td>
                                </tr>
                                <tr>
                                    <td style="padding: 0px" ><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: left;">
                                        <input type="text" value="
                                        <?php echo trim($o->DescripcionTareas) ; ?>
                                        " style="width: 330px;height: 93px;text-align: left;" />
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 0px;vertical-align: top;padding-top: 5px"><span style="font-family:arial,helvetica,sans-serif;font-size: 12px;padding: 0px;padding-left: 12px;">Descripcion de materiales instalados</span></td>
                                </tr>
                                <tr>
                                    <td style="padding: 0px" ><span style="font-family:arial,helvetica,sans-serif;font-size: 9px;text-align: left;">
                                        <input type="text" value="
                                        <?php echo trim($o->MatInstalados) ; ?>
                                        " style="width: 330px;height: 93px;text-align: left;" />
                                        </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class="span-3 last">
    <div id="">
        <table style="border: double; alignment: center; vertical-align: top; border-radius: 5px; border-color: #0066cc; padding: 1px; width: 100%;">
            <tbody>
            <tr>
                <td width="100%">
                    Instancia
                    <input name="insta" id="insta" type="text" value="" style="width: 80px;" />
                    <p><input type="submit" name="/OpTec/index.php?r=ooss/buscarot&amp;insta=0" dir="Buscar" value="Buscar" id="Buscar" style="width: 84px;" /></p>
                    <?php
                        $criteria=new CDbCriteria();
                        $criteria->compare("Baja","0");
                        $criteria->order="instNombre ASC";
                        $mod_inst = Instalador::model()->findAll($criteria);
                    ?>
                    <select name="selInstalador" id="selInstalador" style="width: 80px">
                        <?php
                            echo '<option value="0" selected="selected">Sel Inst...</option>';
                            foreach($mod_inst as $m_inst):
                                echo '<option value="'.$m_inst->IDInstalador.'">'.$m_inst->InstNombre.'</option>';
                            endforeach;
                        ?>
                    </select>
                    <p><input type="submit" name="/OpTec/index.php?r=ooss/asignar&amp;id=<?php echo $o->IdOS; ?>&amp;idInst=51" dir="Asignar" value="Asignar" id="Asignar" style="width: 84px;" /></p>
                    <p><input type="submit" name="/OpTec/index.php?r=ooss/rechazar&amp;id=<?php echo $o->IdOS; ?>" dir="Rechazar" value="Rechazar" id="Rechazar" style="width: 84px;" /></p>
                    <p><input type="submit" name="/OpTec/index.php?r=ooss/finalizar&amp;id=<?php echo $o->IdOS; ?>" dir="Finalizar" value="Finalizar" id="Finalizar" style="width: 84px;" /></p>
                    <p><input type="submit" name="/OpTec/index.php?r=ooss/editar&amp;id=<?php echo $o->IdOS; ?>" dir="Editar" value="Editar" id="Editar" style="width: 84px;" /></p>
                    <p><input type="submit" name="/OpTec/index.php?r=ooss/borrar&amp;id=<?php echo $o->IdOS; ?>" dir="Borrar" value="Borrar" id="Borrar"  style="width: 84px;" /></p>
                    <p><input type="submit" name="/OpTec/index.php?r=ooss/soporte" dir="Volver" value="Volver" style="width: 84px;"></p>
                </td>
            </tr>
            </tbody>
        </table>
    </div><!-- sidebar -->
</div>
<!-- FIN FORMATO NUEVO -->

<?php //$this->endWidget(); ?>

</div>
</form>
<!-- form -->