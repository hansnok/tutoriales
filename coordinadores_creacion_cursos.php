<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php include("header.php")?>
<link rel="stylesheet" href="estilo.css">
<link rel="stylesheet" href="tutoriales.css">
<body>
<div id="top" class="jumbotron text-center">
  	<br><h2><b>Creaci&oacute;n de Cursos</b></h2>      
</div>
<div class="container">
	<div class="row">
		<div class="col-md-6 text-center">
    			<iframe allowfullscreen width="470" height="300" src="https://www.youtube.com/embed/zO5id2o7XPw" frameborder="0"></iframe><br>
		</div>
		<div class="col-md-6 text-justify">
			<p><h4>Crear cursos es de suma importancia ya que ser&aacute; en estos en los que los profesores se podr&aacute;n poner de acuerdo junto con los alumnos en las actividades a realizar.</h4></p>
		</div>
	</div>
	<hr class="featurette-divider"/>
	<div class="row">
		<div class="col-md-12 text-center">
			<h4>La creaci&oacute;n de cursos tiene diversos pasos, ya que adem&aacute;s de cursos, existen grupos dentro de estos. Adem&aacute;s, existen los metacursos y metaenlaces</h4>
		</div>
	</div>
		<hr class="featurette-divider"/>
	<div class="row">
    	<div class="col-md-3 text-center">
    		<a href="#Crear">
    		<p><h3>Crear un curso</h3></p><br>
     	 	<span class="glyphicon glyphicon-plus"></span>
    		</a>      <br><br><p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n de como crear un nuevo curso.</p>
    	</div>
    	<div class="col-md-3 text-center">
    		<a href="#Grupos">
    		<p><h3>Crear Grupos en un curso </h3></p>
      		<span class="glyphicon glyphicon-user"></span>
    		</a><br><br><p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n de como crear grupos dentro de un curso.</p>
   		</div>
    	<div class="col-md-3 text-center">
    		<a href="#Metacurso">
    		<p><h3>Metacurso</h3></p><br>
      		<span class="glyphicon glyphicon-pencil"></span>
    		</a><br><br><p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n de como crear un Meta-curso.</p>
    	</div>
    	<div class="col-md-3 text-center">
    		<a href="#Enlace">
    		<h3><p>Metaenlace</p></h3><br>
      		<span class="glyphicon glyphicon-folder-open"></span>
    		</a><br><br><p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n de como crear un Meta-enlace.</p>
    	</div>
	</div>
	<!-- Crear Cursos -->
	
	<?php include("tutorial_crear_curso.php")?>

 	<!-- Creacion de Grupos -->

	<?php include("tutorial_crear_grupo_curso.php")?>

	<!-- Metacurso -->

	<?php include("tutorial_meta_cursos.php")?>

	<!-- Meta-Enlace -->
	
	<?php include("tutorial_meta_enlace.php") ?>
	
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