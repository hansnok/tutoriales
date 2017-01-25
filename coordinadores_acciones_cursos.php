<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php include("header.php")?>
<link rel="stylesheet" href="estilo.css">
<link rel="stylesheet" href="tutoriales.css">
<body>
<div id="top" class="jumbotron text-center">
  	<br><h2><b>Acciones que puede realizar dentro de un curso</b></h2>      
</div>
<div class="container">
	<div class="row">
		<div class="col-md-6 text-center">
    			<iframe allowfullscreen width="470" height="300" src="https://www.youtube.com/embed/zO5id2o7XPw" frameborder="0"></iframe><br>
		</div>
		<div class="col-md-6 text-justify">
			<p><h4>Como coordinador usted puede matricular usuarios dentro de un curso, asignar roles a los usuarios matriculados e importar actividades de otros cursos, adem&aacute;s de poder agregar una actividad o recurso.</h4></p>
		</div>
	</div>
	<hr class="featurette-divider"/>
	<div class="row">
		<div class="col-md-12 text-center">
			<h4>Como coordinador usted podr&aacute; matricular usuarios, asignar roles, crear actividades e importar elementos de otros cursos.</h4>
		</div>
	</div>
		<hr class="featurette-divider"/>
	<div class="row">
    	<div class="col-md-3 text-center">
    		<a href="#Matricular">
    		<p><h3>Matricular usuarios dentro de un curso</h3></p>
     	 	<span class="glyphicon glyphicon-user"></span>
    		</a><br><br><p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n ver como matricular usuarios dentro de un curso</p>
    	</div>
    	<div class="col-md-3 text-center">
    		<a href="#Roles">
    		<p><h3>Asignar Roles a los usuarios</h3></p>
      		<span class="glyphicon glyphicon-tags"></span>
    		</a><br><br><p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n como asignar un rol a los distintos usuarios</p>
   		</div>
    	<div class="col-md-3 text-center">
    		<a href="#Importar">
    		<p><h3>Importar elementos de un curso</h3></p>
      		<span class="glyphicon glyphicon-share"></span>
    		</a><br><br><p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n de como importar elementos de otros cursos.</p>
    	</div>
    	<div class="col-md-3 text-center">
    		<a href="#Agregar">
    		<h3><p>Agregar Actividad o Recurso</p></h3>
      		<span class="glyphicon glyphicon-font"></span>
    		</a><br><br><p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n sobre como agregar una actividad a su curso.</p>
    	</div>
	</div>
	
	<!-- Matricular Usuarios -->

	<?php include("tutorial_matricular_usuarios.php")?>

	 <!-- Asignacion de Roles -->
	 
	 <?php include("tutorial_asignar_roles.php")?>
	 
	<!-- Importar Curso -->
	
	<?php include("tutorial_importar_elementos_cursos.php")?>

	<!-- Agregar Actividad o Recurso-->
	
	<?php include("tutorial_agregar_actividad.php")?>
	
	<!-- Fin area tutorilaes -->
</div>
	
<!-- Back to top -->
<div data-spy="affix">
	<a href="#top">
    <span class="glyphicon glyphicon-circle-arrow-up"></span>
    </a>
</div>
	<hr id="footer" class="featurette-divider"/>
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