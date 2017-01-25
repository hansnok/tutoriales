<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php include("header.php")?>
<link rel="stylesheet" href="estilo.css">
<link rel="stylesheet" href="tutoriales.css">
<body>
	<div id="top" class="jumbotron text-center">
		<h2>
			<br><b>Acciones que puede realizar dentro de un curso</b>
		</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-center">
    			<iframe allowfullscreen width="470" height="300" src="https://www.youtube.com/embed/zO5id2o7XPw" frameborder="0"></iframe><br>
			</div>	
			<div class="col-md-6 text-justify">			
				<h4>Como profesor usted puede crear actividades las cuales
					facilitaran a los alumnos el desarrollo del curso adem&aacute;s de
					realizar y entregar tareas en l&iacute;nea.</h4>
			</div>
		</div>
		<hr class="featurette-divider" />
		<div class="row">
			<div class="col-md-12 text-center">
				<h4>Puede importar actividades de otro curso, adem&aacute;s de esto podr&aacute; subir archivos, crear actividades y tener las calificaciones en webcursos.</h4>
			</div>
		</div>
		<hr class="featurette-divider" />
		<div class="row">
			<div class="col-md-4 text-center">
				<a href="#Importar">
					<h3>Importar elementos de otro curso</h3>
					<br><span class="glyphicon glyphicon-share"></span>
				</a> <br>
				<br>
				<p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n sobre como importar elementos de un curso a otro, este curso pudo haber sido uno ya realizado anteriormente</p>
			</div>
			<div class="col-md-4 text-center">
				<a href="#Agregar">
					<p>
					
					<h3>Agregar una actividad o recurso</h3>
					</p> <br>
				<span class="glyphicon glyphicon-font"></span>
				</a><br>
				<br>
				<p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n sobre como agregar una actividad a su curso.</p>
			</div>
			<div class="col-md-4 text-center">
				<a href="#Archivo">
					<p>
					<h3>Subir un archivo</h3>
					</p> <br>
				<span class="glyphicon glyphicon-upload"></span>
				</a><br>
				<br>
				<p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n sobre como subir un archivo.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 text-center">
				<a href="#Encuesta">
					<p>
					
					<h3>Crear una encuesta</h3>
					</p> <span class="glyphicon glyphicon-list-alt"></span>
				</a> <br>
				<br>
				<p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n sobre como crear una encuesta.</p>
			</div>
			<div class="col-md-4 text-center">
				<a href="#Cuestionario">
					<p>
					
					<h3>Configurar un cuestionario</h3>
					</p> <span class="glyphicon glyphicon-align-justify"></span>
				</a><br>
				<br>
				<p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n sobre como crear y configurar un cuestionario.</p>
			</div>
			<div class="col-md-4 text-center">
				<a href="#Notas">
					<p>
					
					<h3>Importar/Exportar Calificaciones</h3>
					</p> <span class="glyphicon glyphicon-paste"></span>
				</a><br>
				<br>
				<p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n sobre como importar o exportar calificaciones.</p>
			</div>
		</div>
		<hr class="featurette-divider" />
		
	<!-- Importar Curso -->

	<?php include("tutorial_importar_elementos_cursos.php")?>

	<!-- Agregar Actividad o Recurso-->

	<?php include("tutorial_agregar_actividad.php")?>

	<!-- Subir un archivo -->

	<?php include("tutorial_subir_archivo.php")?>

	<!-- Como Crear una encuesta  -->

	<?php include("tutorial_crear_encuesta.php")?>

	<!-- Configurar Cuestionario -->

	<?php include("tutorial_crear_cuestionario.php")?>

	<!-- Importar/Exportar Calificaciones -->

	<?php include("tutorial_importar_notas.php")?>


    <!-- Fin area tutoriales -->
    </div>

	<!-- Back to top -->
	<div data-spy="affix">
		<a href="#top"> <span class="glyphicon glyphicon-circle-arrow-up"></span>
		</a>
	</div>
	<hr id="footer" class="featurette-divider" />
	<!-- Footer -->

	<?php include("footer.php")?>

</body>
<script type="text/javascript">

$('#accordion').on('show.bs.collapse', function () {
    $('#accordion .in').collapse('hide');
});


$(document).ready(function(){

	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
	});
</script>