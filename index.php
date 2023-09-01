<!DOCTYPE html>
<?php require_once "header.php";
?>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CLínica Salud Center</title>
	
	<!-- core CSS -->
	<link rel="shortcut icon" href="images/favicon.png?v=0.1">
    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="icon" href="images/favicon.png?v=0.1" type="image/favicon.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="css/footer.css" href="style.css">

     <!-- Compiled and minified Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- Minified JS library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Ventana Emergente Animada</title>       
 	
</head><!--/head-->

   <section>

   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
     
       
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="images/slider/banner1.png" alt="">
        </div>
        <div class="item">
            <img src="images/slider/banner2.png" alt="">
        </div>
        <div class="item">
            <img src="images/slider/banner3.png" alt="">
              <div class="carousel-caption">
                <h3 style="cursor: pointer;"><a href="https://api.whatsapp.com/send/?phone=573115252537&text=Hola%21&type=phone_number&app_absent=0"><i class="fas fa-hand-pointer"></i></a></h3>
            </div>
        </div>
        <div class="item">
            <img src="images/slider/banner4.png" alt="">
        </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<hr>

<script type="text/javascript">
    // Iniciar el carousel
    $("#myCarousel").carousel();

    // Cambiar al segundo banner después de 4 segundos
    setTimeout(function() {
        $("#myCarousel").carousel("next");
    }, 3030);

// Go to the previous item
$("#prevBtn").click(function(){
    $("#myCarouselCustom").carousel("prev");
});
// Go to the previous item
$("#nextBtn").click(function(){
    $("#myCarouselCustom").carousel("next");
});
</script>

   </section>
    </section><!--/#main-slider-->
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 wow fadeInDown">
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
              
                                </ul>
                            </div>
                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab2">
                                        <div class="media">
                                           <div class="pull-right">
                                                <img class="img-responsive" src="images/somos4.png">
                                            </div>
                                            <div class="media-body">
                                                 <br>
                                                 <br>
                                                 <h2>¿Quiénes Somos?</h2>
                                                 <p class="texto-somos">Somos una Institución de salud privada que ofrece servicios en el área de Seguridad y Salud en el Trabajo enfocado en la evaluación integral del cliente, con el propósito de contribuir al respaldo total y confiabilidad de los resultados ocupacionales  especializados en el área de la salud laboral; con el objetivo de ofrecer servicios de calidad que ayuden a identificar y a su vez a prevenir, mitigar o eliminar las enfermedades o condiciones laborales, para satisfacción y beneficio de nuestros clientes y comunidad en general.</p>
                                            </div>
                                        </div>
                                    </div>                                   
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

        </div><!--/.container-->
    </div>
</section><!--/#content-->
<!--/#portfolio-->
<section id="services" class="parallax-section">
    <div class="container" style="background-color: rgba(8, 8, 8, 0.49); border-radius: 20px;     padding-bottom: 20px;">
        <div class="row text-center">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="title-one_backgroud">Nuestros Servicios</h2>
                <p style="text-align: center;" class="titulo">Ofrecemos el mejor portafolio en salud ocupacional con los mejores profesionales en el campo.</p>
            </div>
        </div>
        <div class="row2">
            <div class="col-sm-12">
                <div class="our-service">
                    <div class="services row">
                        <div class="col-sm-4">
                            <div class="single-service" style="height: 500px;">
                                <i><img src="images/medicoocupacional.png" alt="logo" style="width:  130px; margin: 5px 0px 0px 0px;"></i>
                                <h2>Medicina Ocupacional</h2>
                                <hr style="width: 70%;">
                                <p>La <strong>MEDICINA OCUPACIONAL</strong> consiste en un conjunto de exámenes que permite explorar el estado de salud de los trabajadores de una organización. El objetivo es prevenir el efecto nocivo que ciertas condiciones laborales pudieran tener sobre los empleados.</p>
                                <a href="medico_ocupacional.php"><button type="button" class="btn btn-primary">Ver Mas</button></a>
                            </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="single-service" style="height: 500px;">
                            <i><img src="images/audiometria.png" alt="logo" style="width:  130px; margin: 5px 0px 0px 0px;"></i>
                            <h2>Audiometría</h2>
                            <hr style="width: 70%;">
                            <p>La <strong>AUDIOMETRÍA OCUPACIONAL</strong> es una prueba funcional, que nos permite valorar la capacidad auditiva en primera instancia. Establece el mínimo nivel de intensidad sonora que es percibido por el paciente (umbral auditivo). </p>
                            <a href="audiometria.php"><button type="button" class="btn btn-primary">Ver Mas</button></a>
                        </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="single-service" style="height: 500px;">
                        <i><img src="images/metria.png" alt="logo" style="width:  130px; margin: 5px 0px 0px 0px;"></i>
                        <h2>Optometría</h2>
                        <hr style="width: 70%;">
                        <p>La <strong>OPTOMETRÍA OCUPACIONAL</strong> Es una prueba que se utiliza para determinar las letras más pequeñas que usted puede leer en una tabla (tabla de Snellen) o tarjeta estandarizada sostenida a una distancia de 20 pies (6 metros). Se utilizan tablas especiales cuando el examen se hace a distancias menores a 20 pies (6 metros).</p>
                        <a href="optometria.php"><button type="button" class="btn btn-primary">Ver Mas</button></a>
                    </div>
              </div>
                  </div>
                </div>
            </div>
              
            <div class="col-sm-12">
                <div class="our-service">
                    <div class="services row">
                        <div class="col-sm-4">
                            <div class="single-service" style="height: 500px;">
                                <i><img src="images/psicologia.png" alt="logo" style="width:  130px; margin: 5px 0px 0px 0px;"></i>
                                <h2>Examen Psicológico</h2>
                                <hr style="width: 70%;">
                                <p>La <strong>EXAMEN PSICOLÓGICO</strong> nos permite evaluar una o más de una de las diferentes áreas que forman parte de la psique de la persona. Se basan en la conducta observable y en la expresión de la subjetividad del individuo siendo necesario un análisis posterior para poder extraer información con significado clínico</p>
                                <a href="examensico.php"><button type="button" class="btn btn-primary">Ver Mas</button></a>
                            </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="single-service" style="height: 500px;">
                            <i><img src="images/psicocen.png" alt="logo" style="width: 130px; margin: 5px 0px 0px 0px;"></i>
                            <h2>Examen Psicosensometrico</h2>
                            <hr style="width: 70%;">
                            <p>La <strong>EXAMEN PSICOSENSOMÉTRICO</strong> Una prueba psicosensométrica es una evaluación en la que se examinan la aptitud física, mental y de coordinación motriz. Esta evaluación considera: Las capacidades de visión y orientación auditiva </p>
                            <a href="examenpiscosensometrico.php"><button type="button" class="btn btn-primary">Ver Mas</button></a>
                        </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="single-service" style="height: 500px;">
                        <i><img src="images/laboratorioclinico.png" alt="logo" style="width:  130px; margin: 5px 0px 0px 0px;"></i>
                        <h2>Laboratorio Clínico</h2>
                        <hr style="width: 70%;">
                        <p>Las pruebas <strong>LABORATORIO CLÍNICO</strong> es una de las pruebas que nos permite examinar muestras de sangre, orina o tejidos corporales. Un técnico o el médico analizan las muestras para determinar si los resultados están dentro de los límites normales. </p>
                        <a href="laboratorio_clinico.php"><button type="button" class="btn btn-primary">Ver Mas</button></a>
                    </div>
              </div>
                  </div>
                </div>
            </div>

        </div>

        <div class="row2">
            <div class="col-sm-12">
                <div class="our-service">
                    <div class="services row">
                        <div class="col-sm-4">
                            <div class="single-service" style="height: 500px;">
                                <i><img src="images/electrocardiograma.png" alt="logo" style="width:  130px; margin: 5px 0px 0px 0px;"></i>
                                <h2>Electrocardiograma</h2>
                                <hr style="width: 70%;">
                                <p> El examen de <strong>ELECTROCARDIOGRAMA</strong> es un procedimiento simple e indoloro que mide la actividad eléctrica del corazón. Cada vez que el corazón late, una señal eléctrica circula a través de él. Un electrocardiograma muestra si su corazón está latiendo a un ritmo y con una fuerza normal. </p>
                                <a href="electrocardiograma.php"><button type="button" class="btn btn-primary">Ver Mas</button></a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="single-service" style="height: 500px;">
                                <i><img src="images/alcohol.png" alt="logo" style="width:  130px; margin: 5px 0px 0px 0px;"></i>
                                <h2>Pruebas de Alcohol Drogas de Abuso</h2>
                                <hr style="width: 70%;">
                                <p>La <strong>PRUEBA DE ALCOHOL DROGAS DE ABUSO</strong> nos permite detectar signos de una o más drogas ilegales o medicamentos recetados en una muestra de orina, sangre, saliva, cabello o sudor. El propósito de la prueba de drogas es detectar uso y abuso de drogas </p>
                                <a href="drogas.php"><button type="button" class="btn btn-primary">Ver Mas</button></a>
                            </div>
                      </div>

                   </div>
                </div>
            </div>
        </div>     
</section><!--/#service-->
<!--Boton chat boot-->
<section id="boot">
<div class="contenedor">
        <div class="btn-flotante">
        <button id="btn-abrir-popup" class="btn-abrir-popup">Agente Virtual</button>
       </div>
    <div class="overlay" id="overlay">
        <div class="popup" id="popup">
            <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
            <iframe src="https://web.powerva.microsoft.com/environments/Default-f524efae-c921-4e8b-851e-b002089d974d/bots/new_bot_4f293d47fe704e6495fa53cb857c1af8/webchat" frameborder="5" style="width: 100%; height: 409px; border: 3px black;"></iframe>                                
        </div>
    </div>
</div>
</section>
</body>
<?php require_once "footer.php";
?>
</html>
