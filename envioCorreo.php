<?php 
$nombresitio = "GeoEstudios | Servicios y Consultoría en Ingeniería";
$contacto = "xvg@geoestudios.com.ec, pazar@geoestudios.com.ec";
$gracias = "Gracias";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
<meta http-equiv="Content-Type" content="text/html>
<meta charset="UTF-8">
<meta content=" " name="description">

<title>Geoestudios | Servicios integrales de ingeniería con estándares internacionales</title>

<link rel="shortcut icon" href="favicon.ico">

<link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css" media="screen" />
<link rel="stylesheet" href="css/slider.css" type="text/css" media="screen" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->


</head>

<body>
<div id="wrap">


<!--Header-->
<header>
	<hgroup>
		<a href="index.htm"><h1 class="logoGeoestudios">Geoestudios</h1></a>
<!-- Menu -->
<div id="menu">
    <ul>
        <li class="sep"><a href="index.htm">Inicio</a></li>
        <li class="sep"><a href="quienes_somos.htm">Quiénes somos</a></li>
        <li class="sep"><a href="#">Servicios</a>
 			<ul>
            	<li><a href="servicios_geotecnia.htm">Geotecnia</a></li>
              	<li><a href="servicios_geofisica.htm">Geofísica</a></li>
                <li><a href="servicios_infraestructura_vial.htm">Infraestructura Vial</a></li>
              	<li><a href="servicios_infraestructura_portuaria.htm">Infraestructura Portuaria</a></li>
              	<li><a href="servicios_ingenieria_sismica.htm">Ingeniería Sísmica-Estructural</a></li>
              	<li><a href="servicios_ingenieria_minas.htm">Ingeniería de Minas</a></li>
<li><a href="servicios_ingenieria_ambiental.htm">Ingeniería Ambiental</a></li>
                <li><a href="servicios_ingenieria_costas.htm">Ingeniería de Costas, Oceanografía y Dragado</a></li>
          </ul>
        </li>
        <li class="sep"><a href="#">Proyectos</a>
 			<ul>
            	<li><a href="proyectos_geotecnia.htm">Geotecnia</a></li>
              	<li><a href="proyectos_geofisica.htm">Geofísica</a></li>
                <li><a href="proyectos_infraestructura_vial.htm">Infraestructura Vial</a></li>
              	<li><a href="proyectos_infraestructura_portuaria.htm">Infraestructura Portuaria</a></li>
              	<li><a href="proyectos_ingenieria_sismica.htm">Ingeniería Sísmica-Estructural</a></li>
              	<li><a href="proyectos_ingenieria_ambiental.htm">Ingeniería Ambiental</a></li>
                <li><a href="proyectos_ingenieria_costas.htm">Ingeniería de Costas, Oceanografía y Dragado</a></li>
          </ul>
        </li>
        <li><a href="contactenos.htm">Contáctenos</a></li>
    </ul>
</div>
<!-- Fin Menu -->
		<h2 class="slogan">Servicios integrales de ingeniería con estándares internacionales</h2>
	</hgroup>
</header>
<!--fin Header-->


<!--Inicio Contenido-->
<div id="contenedor">

<!--Inicio Slider-->
<div class="slider">
        
<!-- Fin Slider-->


<!-- Caja Full -->
<div class="cajaFull">
	<h2>Contáctenos</h2>
    
<div class="izquierda">

<!-- Formulario -->
<?php 
$administrador ="";

//mensaje que le llega al administrador del sitio
$administrador .= "<br>-----Formulario de Comentarios y Sugerencias------<br><br>";
$administrador .= "<b>Nombre completo:</b> " . $_REQUEST["nombredeusuario"] . "<br><br>";
$administrador .= "<b>Empresa:</b> " . $_REQUEST["empresa"] . "<br><br>";
$administrador .= "<b>Dirección:</b> " . $_REQUEST["direccion"] . "<br><br>";
$administrador .= "<b>Ciudad:</b> " . $_REQUEST["ciudad"] . "<br><br>";
$administrador .= "<b>Teléfono:</b> " . $_REQUEST["telefono"] . "<br><br>";
$administrador .= "<b>e-mail:</b> " . $_REQUEST["correoelectronico"] . "<br><br>";

$administrador .= "<b>Comentarios:</b> " . $_REQUEST["comentarios"] . "<br><br>"; 

//mensaje que le llega al postulante
$parausuario = $_REQUEST['nombredeusuario']."<br><br>Gracias por contactarse con GeoEstudios<br><br>";
$parausuario .= "En las próximas horas responderemos a su correo electrónico.<br><br>";
$parausuario .= "Atentamente,<br><br>";
$parausuario .= $nombresitio."<br><br>";
$parausuario .= "Este mensaje fue enviado al siguiente correo electrónico:  ".$_REQUEST["correoelectronico"]."<br><br>";

$codigohtml = $administrador;

$email  = $contacto; // note the comma
$asunto = 'Solicitud de información';
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'From: GeoEstudios <info@geoestudios.com.ec>' . "\r\n";

//correo que le llega al admnistrador del sitio web
mail($email,$asunto,$codigohtml,$cabeceras);
//correo que le llega al postulante
mail($_REQUEST["correoelectronico"],$asunto,$parausuario,$cabeceras);

?>
<br>
<!-- Fin Formulario -->

</div>

<div class="derecha dotter">
<img src="fotos/mapa.jpg">
<p><strong>Dirección:</strong> Calle Jose Assad Bucaram, mz 704 villa 3 (Kennedy Norte)</p>
<p><strong>Teléfono:</strong> (593 4) 268 5503 – (593 4) 268 0068</p>
<p><strong>Guayaquil, Ecuador</strong></p>
<br>
</div>
<!-- Fin Correos -->

<!-- Fin Derecha -->
     
	 <br class="clear">
	</div>
<!-- Fin Caja Full -->


<!--Inicio Footer-->
<footer>
	<div class="menuFooter">
        <ul>
			<li><h4>Principales Clientes</h4></li>
			<li><a href="clientes_empresas_publicas.htm">Empresas Públicas</a></li>
			<li><a href="clientes_empresas_privadas.htm">Empresas Privadas</a></li>
	    </ul>
    
		<ul>
			<li><h4>Recursos</h4></li>
			<li><a href="talento_humano.htm">Talento Humano</a></li>
			<li><a href="equipos_software.htm">Equipos y Software</a></li>
	    </ul>
    
		<ul>
			<li><h4>Alianzas</h4></li>
			<li><a href="alianzas_estrategicas.htm">Alianzas Estratégicas</a></li>
			<li><a href="asesoria_internacional.htm">Asesoría Internacional</a></li>
	    </ul>
    
    
		 
</div>

<div class="copy">
	&copy; 2014 GeoEstudios. All rights reserved
    
		<div class="redes">
            <a href="skype:geoestudios?add" target="_blank"><i class="icon-skype" title="Skype"></i></a>
            <a href="https://twitter.com/geoestudiosSA" target="_blank"><i class="icon-twitter" title="Twitter"></i></a>
        </div>
</div>

</footer>
<!--Fin Footer-->

</div>

<!--Fin contenedor-->
</div>

</body>
</html>
