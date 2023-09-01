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
    <title>Clinica Salud Center</title>
    
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
    </section>-->
    <section id="blog" class="container">
        <div class="blog">
            <div class="row">
                <aside class="col-md-3">
                    <div class="widget categories">
                        <h2>Nuestros Servicios</h2>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="blog_category">
                                    <ul class="blog_category">
                                    <li><a href="medico_ocupacional.php">Medicina Ocupacional</a></li>
                                    <li><a href="audiometria.php">Audiometría</a></li>
                                    <li><a href="optometria.php">Optometría</a></li>
                                    <li><a href="examensico.php">Psicología</a></li>
                                    <li><a href="examenpiscosensometrico.php">Psicosensometrico</a></li>
                                    <li><a href="electrocardigrama.php">Electrocardiograma</a></li>
                                    <li><a href="laboratorio_clinico.php">Laboratorio Clínico</a></li>
                                    <li><a href="drogas.php">Alcohol y Drogas</a></li>
                                    </ul>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.categories-->                                       
                </aside>
                <div class="col-md-9">
                    <div class="blog-item">
                        <div class="row">  
                            <div class="col-xs-12 col-sm-12 blog-content">
                                    <h2>ELECTROCARDIOGRAMA</h2>
                                    <p>
                                        El electrocardiograma (EKG) es una prueba que registra la actividad eléctrica del corazón. Se trata de una representación gráfica de la contracción cardíaca para la que se emplean pequeños discos metálicos (electrodos) que captan, amplifican y registran sobre un papel milimetrado las señales del latido del corazón.
                                    </p>
									
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="images/portfolio/recent/electro.jpg" alt=""></a>
                                </div>                                                                       
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
</body>
<?php require_once "footer.php";
?>
</html>