<?php
session_start();
//Validar que exista la variable de sesión del usuario
if(!isset($_SESSION['nombre']))
{
header('Location:error.php');
}
else
{
echo "Has iniciado sesion: ".$_SESSION['nombre'];
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plancarte, Celaya</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/set1.css" />
	<link href="css/overwrite.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html"><span>Plancarte, Celaya</span></a>
			</div>
			<div class="navbar-collapse collapse">
				<div class="menu">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="index.html">Inicio</a></li>
						<li role="presentation"><a href="blog.html">Acerca de</a></li>
						<li role="presentation"><a href="services.html">Servicio</a></li>
						<li role="presentation"><a href="portfolio.html">Tramites</a></li>
						<li role="presentation"><a href="contact.html">Contactos</a></li>
<<<<<<< HEAD:index2.php
            <li role="presentation"><a href="cerrarsesion.php">Cerrar Sesion</a></li>
=======
                        <li role="presentation"><a href="index.html">Cerrar Sesion</a></li>						
>>>>>>> c158d63b64401b850f8a0dc1dd815727fc7dd426:index2.html
					</ul>
				</div>
			</div>
		</div>
	</nav>


	<div class="container">
		<div class="row">
			<div class="slider">
				<div class="img-responsive">
					<ul class="bxslider">
						<li><img src="img/celaya.jpg" alt=""/></li>
						<li><img src="img/paisaje.jpg" alt=""/></li>
						<li><img src="img/iglesia.jpg" alt=""/></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="text-center">
					<h2>Tramites</h2>
				</div>
				<hr>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="box">
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
						<h4>Matrimonio Civil</h4>
							<div class="icon">
								<i class="fa fa-heart-o fa-3x"></i>
							</div>
						<div class="ficon">
							<a href="#" class="btn btn-default" role="button">Realizar Tramite</a>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
						<h4>Licencia de construcción</h4>
						<div class="icon">
							<i class="fa fa-desktop fa-3x"></i>
						</div>
						<div class="ficon">
							<a href="#" class="btn btn-default" role="button">Realizar Tramite</a>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
						<h4>Permiso para ejercer comercio en espacios abiertos</h4>
						<div class="icon">
							<i class="fa fa-location-arrow fa-3x"></i>
						</div>
						<div class="ficon">
							<a href="#" class="btn btn-default" role="button">Realizar Tramite</a>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="text-center">
					<h2>Noticias</h2>
				</div>
				<br>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="grid">
			<figure class="effect-zoe">
				<img src="img/callesN.JPG" alt="img25"/>
				<figcaption>
					<h3><span>Nuevas calles en Plancarte</span></h3>
					<p class="description">El ayuntamiento de Celaya invirtió 2.7 millones de pesos para el mejoramiento de vailidades en Plancarte.</p>
				</figcaption>
			</figure>
			<figure class="effect-zoe">
				<img src="img/comedor.PNG" alt="img26"/>
				<figcaption>
					<h6><span>DIF MUNICIPAL REINAUGURA COMEDOR COMUNITARIO EN PLANCARTE</span></h6>
					<p class="description">Autoridades municipales asistieron a la reinauguración del comedor que DIF Celaya tiene en funcionamiento, a través de su área de Desarrollo Alimentario, en la comunidad de Plancarte.</p>
				</figcaption>
			</figure>
		</div>
	</div>

	<div class="content">
		<div class="grid">
			<figure class="effect-zoe">
				<img src="img/secu.JPG" alt="img27"/>
				<figcaption>
					<h2><span>Ignaguran Secundiaria</span></h2>
					<p class="description">Invierte el Gobierno del estado 2,140 millones de pesos en materia educativa para Guanajuato.</p>
				</figcaption>
			</figure>

			<figure class="effect-zoe">
				<img src="img/gallero.PNG" alt="img30"/>
				<figcaption>
					<h4><span>EJECUTAN A GALLERO EN LA COMUNIDAD DE PLANCARTE</span></h4>
					<p class="description"> Una hombre dedicado a la crianza y venta de gallos de pelea, fue atacado a balazos y ejecutado la mañana de este miércoles a unos cuatros metros de su hogar ubicado en la comunidad de Plancarte.</p>
				</figcaption>
			</figure>
		</div>
	</div>

	<footer>
		<div class="inner-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 f-about">
						<a href="index.html"><h1><span>P</span>lancarte</h1></a>
						<img src="img/celayaescudo.jpg" alt="imgcelaya" align="middle"/>
					</div>
					<div class="col-md-4 l-posts">
						<h3 class="widgetheading">Mapa de Sitio</h3>
						<ul>
							<li><a href="#">Inicio</a></li>
							<li><a href="#">Acerca de</a></li>
							<li><a href="#">Tramites</a></li>
							<li><a href="#">Contactos</a></li>
						</ul>
					</div>
					<div class="col-md-4 f-contact">
						<h3 class="widgetheading">Stay in touch</h3>
						<a href="#"><p><i class="fa fa-envelope"></i> example@gmail.com</p></a>
						<p><i class="fa fa-phone"></i>  +345 578 59 45 416</p>
						<p><i class="fa fa-home"></i> Enno inc  |  PO Box 23456
							Little Lonsdale St, New York <br>
							Victoria 8011 USA</p>
					</div>
				</div>
			</div>
		</div>


		<div class="last-div">
			<div class="container">
				<div class="row">
					<div class="copyright">
						© 2018 Plancarte,Celaya| <a target="_blank" href="http://bootstraptaste.com">Guanajuato</a>
					</div>
                    <!--
                        All links in the footer should remain intact.
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=eNno
                    -->
				</div>
			</div>
			<div class="container">
				<div class="row">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
					</ul>
				</div>
			</div>

			<a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>


		</div>
	</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
	<script src="js/functions.js"></script>
	<script type="text/javascript">$('.portfolio').flipLightBox()</script>
  </body>
</html>
