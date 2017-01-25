<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php include("header.php")?>
<link rel="stylesheet" href="estilo.css">
<link rel="stylesheet" href="tutoriales.css">
<body>
<div id="top" class="jumbotron text-center">
  	<br><h2><b>Matriculaci&oacute;n y Desmatriculaci&oacute;n de usuarios</b></h2>      
</div>
<div class="container">
			<div class="row">
				<div class="col-md-6 text-center">
    				<iframe allowfullscreen width="470" height="300" src="https://www.youtube.com/embed/zO5id2o7XPw" frameborder="0"></iframe><br>
				</div>
				<div class="col-md-6 text-justify">
					<p><h4>Al poder matricular usuarios a un curso, ser&aacute; capaz de a&ntilde;adir al ayudante al curso cosa de que este sea capas de crear las actividades pertinentes en caso de ser necesarias</h4></p>
				</div>
	</div>
	<hr class="featurette-divider"/>
	<div class="row">
		<div class="col-md-12 text-center">
			<h4>Lo primero ser&aacute; matricular a los usuarios en un curso, lo que le permitir&aacute; asignarle roles, adem&aacute;s de esto, como profesor ser&aacute; capas de desmatricular usuarios del curso.</h4>
		</div>
	</div>
		<hr class="featurette-divider"/>
	<div class="row">
    	<div class="col-md-4 text-center">
    		<a href="#Matricular">
    		<p><h3>Matricular usuarios en un curso</h3></p>
     	 	<br><span class="glyphicon glyphicon-user"></span>
    		</a>      <br><br><p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n sobre como matricular usuarios dentro de un curso.</p>
    	</div>
    	<div class="col-md-4 text-center">
    		<a href="#Roles">
    		<p><h3>Asignar roles a los usuarios</h3></p>
      		<br><span class="glyphicon glyphicon-tags"></span>
    		</a><br><br><p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n sobre como asignar un rol a los distintos usuarios.</p>
   		</div>
    	<div class="col-md-4 text-center">
    		<a href="#Desmatricular">
    		<p><h3>Desmatricular a un usuario</h3></p>
      		<br><span class="glyphicon glyphicon-remove"></span>
    		</a><br><br><p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n sobre como desmatricular a un usuario de su curso.</p>
    	</div>
	</div>
	<!-- Matricular Usuarios -->
	
	<?php include("tutorial_matricular_usuarios.php")?>
	
	 <!-- Asignacion de Roles -->
	
	 <?php include("tutorial_asignar_roles.php")?>
	
	<!-- Desmatricular -->
	
	<?php include("tutorial_desmatricular_usuario.php")?>
	
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