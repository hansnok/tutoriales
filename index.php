<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php include("header.php")?>
<link rel="stylesheet" href="portada.css">
<link rel="stylesheet" href="estilo.css">
<script src="bootstrap/js/youtube.js"></script>
<script src="bootstrap/js/bootstro.min.js"></script>
<link rel="stylesheet" href="bootstro.min.css">
<body>
	<div class="jumbotron text-center">
		<h1 class="bootstro">
			Bienvenido a <b>WebC</b> Tutoriales
		</h1>
		<p>Aqu&iacute; podr&aacute; encontrar tutoriales para las diferentes
			&aacute;reas y roles que se tienen en webcursos junto con videos
			explicativos.</p>
	</div>
	<!-- Roles -->
	<div class="bg-2">
		<div class="container text-center" style="margin-bottom: 20px">
			<h3 class="rol"><b>ROLES</b></h3>
				<h4>Aqu&iacute; podr&aacute; encontrar los distintos roles para los
				cuales ofrecemos tutoriales<br></h4>
				<br>
			<div class="container">
				<div class="row">
					<div class="col-md-3 text-center">
						<a href="coordinadores.php"
							style="color: #ffffff">
							<h3>Coordinadores</h3>
							<br> <span class="glyphicon glyphicon-paperclip"></span>
						</a><br><br>
								<p>Como coordinador usted podr&aacute; crear cursos, matricular
									usuarios, crear actividades y subir archivos.</p>
					</div>
					<div class="col-md-3 text-center">
						<a href="profesores.php" style="color: #ffffff">
							<h3>Profesores</h3>
							<br> <span class="glyphicon glyphicon-blackboard"></span>
						</a>
						<br><br>
								<p>Como profesor usted podr&aacute; crear actividades subir
									archivos entre otras cosas.</p>
					</div>
					<div class="col-md-3 text-center">
						<a href="ayudantes.php" style="color: #ffffff">
							<h3>Ayudantes</h3>
							<br> <span class="glyphicon glyphicon-book"></span>
						</a>
						<br><br>
								<p>Como ayudante usted podr&aacute; crear actividades y subir
									archivos.</p>
					</div>
					<div class="col-md-3 text-center">
						<a href="alumnos.php" style="color: #ffffff">
							<h3>Alumnos</h3>
							<br> <span class="glyphicon glyphicon-pencil"></span>
						</a>
						<br><br>
								<p>Como alumno usted podr&aacute; reservar salas de estudio y
									matricularse en alg&uacute;n curso para ver su
									informaci&oacute;n.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- Intro Webcursos -->
	<div class="bg-1">
		<div class="container text-center" style="margin-bottom: 20px">
			<div class="row">
			<h3 class="rol"><b>Testimonios</b></h3>
				<h4>Vea los distintos testimonios de profesores sobre webcursos</h4>
				<div class="row">
					<div class="col-md-4">
						<iframe width="330" height="250" src="https://www.youtube.com/embed/s6RtRBbkm7I" frameborder="0" allowfullscreen></iframe>
						<div class="row">
							<p>Testimonio 1: Que es Webcursos</p>
						</div>
					</div>
					<div class="col-md-4">
						<iframe width="330" height="250" src="https://www.youtube.com/embed/Le-nbrZoK_s" frameborder="0" allowfullscreen></iframe>
						<div class="row">
							<p>Testimonio 2: Que permite Webcursos</p>
						</div>
					</div>
					<div class="col-md-4">
						<iframe width="330" height="250" src="https://www.youtube.com/embed/OuGikc6eU5g" frameborder="0" allowfullscreen></iframe>
						<div class="row">
							<p>Testimonio 3: Utilidad de Webcursos</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Ultimos tutoriales agregados -->
	<div class="bg-3">
	<div class="container text-center">
		<h3 class="margin vids">&Uacute;ltimos tutoriales multimedia agregados</h3>
		<h4>Estos son los ultimos videos agregados al <a href="https://www.youtube.com/channel/UCgP-Uk-fjyjoFwmfNEATZcA"> canal de Webcursos</a> al cual puede acceder si hace click en el nombre. </h4>
	<div id="results" class="text-center">
	</div>
	</div>
	</div>
	<!-- Footer -->
<?php include("footer.php")?>
</body>
<script type="text/javascript">
$(document).ready(function(){
		bootstro.start(selector, options);
});
</script>