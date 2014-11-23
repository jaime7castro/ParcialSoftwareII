<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
            <div id="logo">
                <img src="images/faro1.gif" alt="faro" style="width: 6%; height: 6%">
                <?php echo CHtml::encode(Yii::app()->name); ?>
            </div>
                
	</div><!-- header -->

    <div id="mainmenu">    
	<div id="topbar" >
		<?php $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
			array('label'=>'Inicio', 'url'=>array('/site/index')),
			array('label'=>'FarmaCruz', 'url'=>array('/site/page', 'view'=>'about')),
			array('label'=>'Contáctenos', 'url'=>array('/site/contact')),
                        array('label'=>'Iniciar Sesión', 'url'=>Yii::app()->user->ui->loginUrl, 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'Fin Sesión ('.Yii::app()->user->name.')', 'url'=>Yii::app()->user->ui->logoutUrl, 'visible'=>!Yii::app()->user->isGuest),				
                        array('label'=>'Compras', 'url'=>array('/site/vCompras'),
                            'items'=>array(
                                array('label'=>'Gestionar Provedor', 'url'=>array('/provedor/index')),  

                            ),'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Ventas', 'url'=>array('/site/vVentas'),
                            'items'=>array(
                                array('label'=>'Gestionar Persona', 'url'=>array('/persona/index')),  
                                array('label'=>'Gestionar Estado del Personal', 'url'=>array('/estado/index')), 
                                //array('label'=>'Administrar Estado del Personal ', 'url'=>array('/estadoPersona/admin')),
                            ),'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Producto', 'url'=>array('/site/vProducto'),
                            'items'=>array(
                                array('label'=>'Administrar Producto', 'url'=>array('/producto/index')),
                                array('label'=>'Gestionar Laboratorio', 'url'=>array('/laboratorio/index')), 
                                array('label'=>'Gestionar Funcion', 'url'=>array('/funcion/index')),  
                                array('label'=>'Gestionar Presentacion', 'url'=>array('/presentacion/index')), 
                            ),'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Inventario', 'url'=>array('/site/vInventario'),
                            'items'=>array( 
                                array('label'=>'Gestionar Estanteria', 'url'=>array('/estanteria/index')), 
                                array('label'=>'Realizar Nota de Salida', 'url'=>array('/notaSalida/index')), 
                            ),'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Personas', 'url'=>array('/site/vPersona'),
                            'items'=>array(
                                array('label'=>'Cuenta de Usuarios','url'=>Yii::app()->user->ui->userManagementAdminUrl, 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Gestionar Usuario', 'url'=>array('/usuario/index')),
                                array('label'=>'Gestionar Cliente', 'url'=>array('/cliente/index')),
                                array('label'=>'Gestionar Tipo de Contacto', 'url'=>array('/tipoContacto/index')),  
                                array('label'=>'Gestionar Cargo', 'url'=>array('/cargo/index')), 
                            ),'visible'=>!Yii::app()->user->isGuest),
                        
                        
                    ),
		)); ?>
	</div><!-- mainmenus -->
    </div>    
      
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'homeLink'=>''
		)); ?><!-- breadcrumbs -->
	<?php endif?>
                
        <!-- VER MENSAJES FLASH -->
        <div class="info" style="text-align: left;">
        <?php
            $flashMessages = Yii::app()->user->getFlashes();
            if($flashMessages){
                echo '<ul class="flashes">';
                foreach($flashMessages as $key=>$message){
                    echo '<li><div class="flash-'.$key.'">'.$message."</div></li>\n";
                }
                echo '</ul>';
            }
        ?>
        </div>        

	<div id="main-content">
		<?php echo $content; ?>
	</div>
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> por Jaime Castro<br/>
		Todos los derechos reservados.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

<?php
//efecto para el div de Mensaje Flash
Yii::app()->clientScript->registerScript(
   'myHideEffect',
   '$(".info").animate({opacity: 1.0},10000).slideUp("slow");',
   CClientScript::POS_READY    
);
?>
