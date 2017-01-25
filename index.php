<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php include("header.php")?>
<link rel="stylesheet" href="portada.css">
<link rel="stylesheet" href="estilo.css">
<script src="bootstrap/js/youtube.js"></script>
<body>
	<div class="jumbotron text-center">
		<h1>
			Bienvenido a <b>WebC</b> Tutoriales
		</h1>
		<p>Aqu&iacute; podr&aacute; encontrar tutoriales para las diferentes
			&aacute;reas y roles que se tienen en webcursos junto con videos
			explicativos.</p>
	</div>
	<!-- Intro Webcursos -->
	<div class="bg-1">
		<div class="container text-center" style="margin-bottom: 20px">
			<div class="row">
				<div class="col-md-8 text-center">
					<iframe width="550" height="400"
						src="https://www.youtube.com/embed/s6RtRBbkm7I" frameborder="0"
						allowfullscreen></iframe>
					</a>
				</div>
				<div class="col-md-4 text-justify">
					<h4>Webcursos es una plataforma de comunicaci&oacute;n entre
						alumnos y profesores la cual permite que expresen sus inquietudes
						de tal forma de mejorar la relacion entre ambas comunidades.</h4>
					<hr class="featurette-divider" />
					<div class="row">
						<div class="col-md-12 text-center">
							<img src="images/logo_web_c.png" class="img-responsive margin"
								style="display: inline" width="200" height="200" alt="Image">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Roles -->
	<div class="bg-2">
		<div class="container text-center">
			<h3 class="rol"><b>ROLES</b></h3>
				<h3>Aqu&iacute; podr&aacute; encontrar los distintos roles para los
				cuales ofrecemos tutoriales<br></h3>
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
	<!-- Ultimos tutoriales agregados -->
	<div class="bg-3">
	<div class="container text-center">
		<h3 class="margin">&Uacute;ltimos tutoriales multimedia agregados</h3>
		<p>Estos son los ultimos videos agregados al canal de Webcursos al cual puede acceder si hace click en el nombre. </p>
	</div>
	<div id="results" class="container text-center">
	</div>
	</div>
	<!-- Footer -->
<?php include("footer.php")?>
</body>