<!DOCTYPE html>
<?php 
		require_once "header.php"; 
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Clínica Salud Center</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">

    <!-- Compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- Minified JS library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
    <section id="blog" class="container">
        <div class="blog">
            <div class="row">
                <div class="col-md-5">
                    <div class="blog-item">
                        <div class="row">  
                            <div class="col-xs-12 col-sm-12 blog-content">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="images/portfolio/recent/mision.jpg" alt=""></a>
                                    <h2>Valores Corporativos</h2> 
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="blog_category">
                                                <ul class="blog_category">
                                                    <li><a href="">Confianza</a></li>
                                                    <li><a href="">Honestidad</a></li>
                                                    <li><a href="">Excelencia en nuestros servicios</a></li>
                                                    <li><a href="">Integridad</a></li>
                                                    <li><a href="">Trabajo en equipo</a></li>
                                                    <li><a href="">Calidad</a></li>
                                                </ul>
                                            </ul>
                                        </div>
                                    </div> 
                                </div>                                                                       
                            </div>
                        </div>
                    </div><!--/.blog-item-->
                </div><!--/.col-md-9-->
                <div class="col-md-7">
                    <div class="blog-item">
                        <div class="row">  
                            <div class="col-xs-12 col-sm-12 blog-content">
                                    <h2>MISIÓN</h2>
                                    <p>Somos una Institución de salud privada que ofrece servicios en el área de Seguridad y Salud en el Trabajo enfocado en la evaluación integral del cliente, con el propósito de contribuir al respaldo total y confiabilidad de los resultados ocupacionales  especializados en el área de la salud laboral; con el objetivo de ofrecer servicios de calidad que ayuden a identificar y a su vez a prevenir, mitigar o eliminar las enfermedades o condiciones laborales, para satisfacción y beneficio de nuestros clientes y comunidad en general</p>
                                    <h2>VISIÓN</h2>                                    
                                    <p>En el año 2026 nos mantendremos como una institución líder en la prestación de servicios de salud laboral, reconocida a nivel nacional por sus más altos estándares de calidad y excelencia en la atención; contando con los mejores profesionales especializados en nuevos servicios, trabajando en equipo y comprometidos en la mejora continua en caminados al cumplimiento de los requisitos legales vigentes aplicable para nuestra función.</p>
                                     <h2>POLÍTICA DE CALIDAD</h2>                                    
                                    <p>LA CLÍNICA SALUD CENTER S.A.S., se siente comprometida en el  valor del Sistema Integrado de Gestión enfocado a mantener los más altos estándares de Calidad, Seguridad y Salud en el Trabajo y Medio Ambiente, la cual nos permitirá garantizar la satisfacción de nuestros servicios, cumpliendo de esta forma con las necesidades y expectativas de nuestros clientes internos, externos y demás partes interesadas, manteniendo de esta forma la rentabilidad, sostenibilidad y perdurabilidad de nuestra Institución</p>
                            </div>
                        </div>
                    </div><!--/.blog-item-->
                </div><!--/.col-md-9-->
            </div><!--/.row-->
         </div><!--/.blog-->
    </section><!--/#blog-->

    <!--Boton chat boot-->
        <section id="boot">
            <div class="contenedor">
                    <div class="btn-flotante">
                    <button id="btn-abrir-popup" class="btn-abrir-popup">Agente Virtual</button>
                </div>
                <div class="overlay" id="overlay">
                    <div class="popup" id="popup">
                        <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                        <iframe src="https://web.powerva.microsoft.com/environments/Default-f524efae-c921-4e8b-851e-b002089d974d/bots/new_bot_4f293d47fe704e6495fa53cb857c1af8/webchat" frameborder="5" style="width: 100%; height: 350px; border: 3px black;"></iframe>                                
                    </div>
                </div>
            </div>
        </section>
    <!--Chat Boot end-->
    <!-- Site footer -->
</body>
<?php require_once "footer.php";
?>
</html>