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
    <div class="center">       
            </div> 	
    <section id="contact-page">
        <div class="container">
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="container">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.669908113782!2d-76.50212538584967!3d0.49419376386601616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2878dfb5b3aacb%3A0x5e4577bea9e64681!2sClinica%20Salud%20Center%20sas!5e0!3m2!1ses!2sco!4v1669685817393!5m2!1ses!2sco" width="500" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>

	</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">	
            <div class="center">        
                <h2>CONTÁCTENOS</h2>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
				<form action="enviar.php" method="post">
								<div class="input-field">
									<input type="text" name="Nombre" class="form-control" placeholder="Nombre..."><br>
								</div>
								<div class="input-field">
									<input type="email" name="Email" class="form-control" placeholder="Email..."><br>
								</div>
								<div class="input-field">
									<input type="text" name="Asunto" class="form-control" placeholder="Asunto..."><br>
								</div>
								<div class="input-field">
							<textarea name="Mensaje" class="form-control" placeholder="Mensaje..."></textarea><br>
					</div>
				<button type="submit" id="submit" class="btn btn-dark">Enviar</button>
			</form>                                 											
    </section><!--/#contact-page-->
     <!--Chat Boot start-->
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