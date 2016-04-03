<?php
    /* @var $this Controller */
    Yii::app()->clientScript->registerCoreScript('jquery');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
<!--        --><?php //echo Yii::app()->bootstrap->init(); ?>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="es">

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/optec.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mbmenu.css">                                                                                                           

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!--    <link rel="stylesheet" type="text/css" href="--><?php //echo Yii::app()->request->baseUrl; ?><!--/css/customB2C.css" />-->
        <script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
    <!--    <title>--><?php //echo TITLE_PAGE; ?><!--</title>-->
        <!-- Comment Facebook -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <!-- Script Facebook Like Button-->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <!-- Script Tweet Share Button-->
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id))
            {js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <!-- Meta Data Page-->
    <!--    <meta property="og:title" content=--><?php //echo META_DATA_TITLE; ?><!-- />-->
<!--        <meta property="og:type" content="website" />-->
<!--        <meta property="og:url" content="http://www.b2c.com/b2c" />-->
<!--        <meta property="og:image" content="http://findicons.com/icon/13459/facebook?id=351793" />-->
    <!--    <meta property="og:site_name" content=--><?php //echo META_DATA_TITLE; ?><!-- />-->
<!--        <meta property="fb:admins" content="306265969480829" />-->
    <!--    <meta name="keywords" content=--><?php //echo META_DATA_KEYWORDS; ?><!-- />-->
    <!--    <meta name="description" content=--><?php //echo META_DATA_DESCRIPTION; ?><!-- />-->
    <!--    <meta name="DC.description" content=--><?php //echo META_DATA_DESCRIPTION; ?><!-- />-->

    </head>

<!--    <body class="background-black">-->
<!--    <div class="body-image">-->
<!--        <div class="container-image">-->
<!--            <div class="div-face-twitter">-->
<!---->
<!--                <div class="fb-like" data-href="http://www.vates.com" data-send="true" data-width="400"-->
<!--                     data-show-faces="false" data-action="recommend" data-font="lucida grande"></div>-->
<!--            </div>-->
<!--            <div class="div-face-twitter">-->
<!--                <a href="https://twitter.com/share" class="twitter-share-button" data-url="https://www.vates.com"-->
<!--                   data-via="B2C_VATES" data-lang="en">--><?php //echo TWEET; ?><!-- </a>-->
<!--            </div>    -->



    <?php if ((Yii::app()->session['estadoB2C'] <> 'logueadoB2C')) { ?>
        <body class="background-black">
            <div class="body-image">
                <div class="container-image" id="page">
<!--                <div class="div-face-twitter">-->
<!--    -->
<!--                    <div class="fb-like" data-href="http://www.vates.com" data-send="true" data-width="400"-->
<!--                         data-show-faces="false" data-action="recommend" data-font="lucida grande"></div>-->
<!--                </div>-->
<!--                <div class="div-face-twitter">-->
<!--                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="https://www.vates.com"-->
<!--                       data-via="B2C_VATES" data-lang="en">--><?php //echo TWEET; ?><!-- </a>-->
<!--                </div>-->
    <?php } else { ?>
        <body class="body-image">
        <div class="container-custom-b2c" id="page">
            <div class="page-custom-b2c" id="page">
    <?php } ?>
    <?php if ((Yii::app()->session['estadoB2C'] <> 'logueadoB2C')) { ?>
        <div id="header">
<!--            <div id="logo" class="font-white">-->
<!--                --><?php //echo "Bienvenido a " . CHtml::encode(Yii::app()->name); ?>
<!--            </div>-->
        </div><!-- header -->
    <?php } ?>
<!--                <div id="mainmenu">-->
                <div id="mainMbMenu            ">
<!--                    --><?php //$this->widget('zii.widgets.CMenu',array(
//                        'items'=>array(
//                            array('label'=>'Sistema', 'url'=>array('/site/index'), 'visible'=>Yii::app()->user->isGuest),
//                            array('label'=>'Empresa', 'url'=>array('/empresa/index'), 'visible'=>!Yii::app()->user->isGuest),
//                            array('label'=>'Clientes', 'url'=>array('/clientes/index'), 'visible'=>!Yii::app()->user->isGuest),
//                            array('label'=>'Instaladores', 'url'=>array('/instalador/index'), 'visible'=>!Yii::app()->user->isGuest),
//                            array('label'=>'Materiales', 'url'=>array('/materiales/index'), 'visible'=>!Yii::app()->user->isGuest),
//                            array('label'=>'PreOT', 'url'=>array('/ooss/index'), 'visible'=>!Yii::app()->user->isGuest),
//                            //array('label'=>'Usuarios', 'url'=>array('/usuarios/index'), 'visible'=>!Yii::app()->user->isGuest),
//                            array('label'=>'Administrar Usuarios', 'url'=>Yii::app()->user->ui->userManagementAdminUrl, 'visible'=>!Yii::app()->user->isGuest),
//                            array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about'), 'visible'=>Yii::app()->user->isGuest),
//                            array('label'=>'Contacto', 'url'=>array('/site/contact'), 'visible'=>Yii::app()->user->isGuest),
//                            //array('label'=>'Ingresar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
//                            array('label'=>'Ingresar', 'url'=>Yii::app()->user->ui->loginUrl, 'visible'=>Yii::app()->user->isGuest),
//                            //array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
//                            array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>Yii::app()->user->ui->logoutUrl, 'visible'=>!Yii::app()->user->isGuest),
//                        ),
//                    )); ?>

<?php
    $this->widget('application.extensions.mbmenu.MbMenu                                      ', array(
        'items'=>array(
            // Menu Sistema
            array('label'=>'Sistema', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                array('label'=>'Empresa', 'url'=>'#'),
                array('label'=>'Desarrollo', 'url'=>'#'),
                array('label'=>'Contacto', 'url'=>array('/site/contact')),
                array('label'=>'Acerca de...', 'url'=>array('/site/page', 'view'=>'about')),
                )
            ),
            array('label'=>'Empresa', 'url'=>'#', 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Desarrollo', 'url'=>'#', 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Contacto', 'url'=>array('/site/contact'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Acerca de...', 'url'=>array('/site/page', 'view'=>'about'), 'visible'=>Yii::app()->user->isGuest),
            // Menu Administracion
            array('label'=>'Administracion', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                array('label'=>'Instaladores (ABM)', 'url'=>array('/instalador/index'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Listados', 'url'=>'#', 'itemOptions'=>  array('class'=>'dropdown-submenu'),
                    'items'=>array(
                        array('label'=>'Clientes', 'url'=>'#'),
                        array('label'=>'Instaladores', 'url'=>'#'),
                        array('label'=>'Materiales', 'url'=>'#'),
                        array('label'=>'Usuarios', 'url'=>'#'),
                    ),
                ),
                array('label'=>'Liquidaciones', 'url'=>'#', 'itemOptions'=>  array('class'=>'dropdown-submenu'),
                    'items'=>array(
                        array('label'=>'Carga de aprobaciones ADT', 'url'=>'#'),
                        array('label'=>'Valores para liquidar', 'url'=>'#'),
                        array('label'=>'Generar liquidaciones', 'url'=>'#'),
                        array('label'=>'Informe', 'url'=>'#',),
                        ),
                    ),
                )
            ),
            // Menu Stock
            array('label'=>'Stock', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                array('label'=>'Control de Stock', 'url'=>'#'),
                array('label'=>'Sucursales', 'url'=>'#'),
                array('label'=>'Materiales (ABM)', 'url'=>'#'),
                array('label'=>'Informes', 'url'=>'#', 'itemOptions'=>  array('class'=>'dropdown-submenu'),
                    'items'=>array(
                        array('label'=>'Stock por sucursal', 'url'=>'#'),
                        array('label'=>'Stock general', 'url'=>'#'),
                        array('label'=>'Stock asignado', 'url'=>'#'),
                        ),
                    ),
                )
            ),
            // Menu Soporte
            array('label'=>'Soporte', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                array('label'=>'General (OnLine)', 'url'=>array('/ooss/soporte'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Carga de manual de Jobs', 'url'=>'#'),
                array('label'=>'Consulta rapida', 'url'=>'#'),
                array('label'=>'Informe de estados', 'url'=>'#'),
                )
            ),
            // Menu Informes
            array('label'=>'Informes', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                array('label'=>'Supervision general', 'url'=>'#', 'itemOptions'=>  array('class'=>'dropdown-submenu'),
                    'items'=>array(
                        array('label'=>'Actual de estados', 'url'=>'#'),
                        array('label'=>'Productividad general', 'url'=>'#'),
                        array('label'=>'Productividad por tecnico', 'url'=>'#'),
                    ),
                ),
                array('label'=>'Generales', 'url'=>'#', 'itemOptions'=>  array('class'=>'dropdown-submenu'),
                    'items'=>array(
                        array('label'=>'Clientes', 'url'=>'#'),
                        array('label'=>'Instaladores', 'url'=>'#'),
                        array('label'=>'Materiales', 'url'=>'#'),
                        array('label'=>'Usuarios', 'url'=>'#'),
                    ),
                ),
                array('label'=>'Instaladores', 'url'=>'#', 'itemOptions'=>  array('class'=>'dropdown-submenu'),
                    'items'=>array(
                        array('label'=>'Mis valores de liquidacion', 'url'=>'#'),
                        array('label'=>'Mis datos', 'url'=>'#'),
                        array('label'=>'Ver Liquidaciones', 'url'=>'#'),
                        array('label'=>'Trabajos asignados', 'url'=>'#', 'itemOptions'=>  array('class'=>'dropdown-submenu'),
                            'items'=>array(
                                array('label'=>'Dia de hoy', 'url'=>'#'),
                                array('label'=>'Abiertos', 'url'=>'#'),
                                array('label'=>'Finalizados', 'url'=>'#'),
                            ),
                        ),

                    ),
                ),
                array('label'=>'Level One', 'url'=>'#', 'itemOptions'=>  array('class'=>'dropdown-submenu'),
                    'items'=>array(
                        array('label'=>'Level One', 'url'=>'#'),

                        ),
                    ),
                )
            ),
            // Menu Login
            array('label'=>'Ingresar', 'url'=>Yii::app()->user->ui->loginUrl, 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>Yii::app()->user->ui->logoutUrl, 'visible'=>!Yii::app()->user->isGuest),
            // Agregar algun otro menu desplegable aqui
        ),
    ));
?>

                </div><!-- mainmenu -->
<!--                --><?php //if(isset($this->breadcrumbs)):?>
<!--                    --><?php //$this->widget('zii.widgets.CBreadcrumbs', array(
//                        'links'=>$this->breadcrumbs,
//                    )); ?><!--<!-- breadcrumbs -->
<!--                --><?php //endif?>

                <?php echo $content; ?>

                <div class="clear"></div>

                <div id="footer">
                    Copyright &copy; <?php echo date('Y'); ?> por LeComp.<br/>
                    Todos los derechos reservados.<br/>
            <!--		<?php //echo Yii::powered(); ?>-->
                </div><!-- footer -->
            </div><!-- page -->
            <?php echo Yii::app()->user->ui->displayErrorConsole(); ?>
        </div>
    </body>
</html>
