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
                                    <h2>EXAMEN MEDICO DE SALUD OCUPACIONAL</h2>
                                    <p>
                                        <strong> MEDICINA OCUPACIONAL:</strong> Son realizados por médicos especialistas en Salud Ocupacional, donde se genera el Certificado de Aptitud Laboral de cada trabajador, constituyendo su historia clínica ocupacional. <br>

                                            Tipos de exámenes ocupacionales: <br>
                                            <br>
                                           <strong>#️⃣Exámen Médico Ocupacional de ingreso:</strong> Es aquel que se realiza para determinar las condiciones de salud física, mental y social del trabajador antes de su contratación. <br>
                                            <br>
                                            <strong>#️⃣Exámen Médico Ocupacional Periódico:</strong> Son las que se realizan con el fin de monitorear la exposición a factores de riesgo e identificar en forma temprana, posibles alteraciones temporales, permanentes o agravadas del estado de salud del trabajador ocasionadas por la labor desempeñada, así como detectar enfermedades de origen común con el fin de establecer un manejo preventivo. <br>
                                            <br>
                                            <strong>#️⃣Examen médico Ocupacionales Pos Incapacidad:</strong> Es un examen que debe realizarse a los trabajadores que presenten incapacidad medica de origen común o profesional y que como consecuencia de la enfermedad presenten limitaciones físicas que dificulten la realización de las tareas propias del cargo o los factores de riesgo presentes en el ambiente laboral puedan agravar la enfermedad.  Es requisito conocer el profesiograma de la empresa y el panorama de factores de riesgo, para orientar el manejo del caso. <br>
                                            <br>
                                            Examen ocupacional énfasis en:
                                            <ul>
                                                <li> ✔️ Examen Médico Ocupacional para Trabajo en Alturas</li>
                                                <li> ✔️Examen Médico Ocupacional con énfasis Osteomuscular.</li>
                                                <li> ✔️Examen Médico Ocupacional para Conducción Vehicular y fluvial</li>
                                                <li> ✔️Examen Médico Ocupacional para Trabajo en Espacios Confinados.</li>
                                                <li> ✔️Examen Médico Ocupacional para Manipulación de Alimentos.</li>
                                                <li> ✔️Examen Médico Ocupacional para Manipulación de sustancias químicas.</li>
                                             
                                            </ul>
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="images/portfolio/recent/ocupacional.jpg" alt=""></a>
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
    <!--Chat Boot end-->
</body>
<?php require_once "footer.php";
?>
</html>