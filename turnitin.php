<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php include("header.php")?>
<link rel="stylesheet" href="estilo.css">
<link rel="stylesheet" href="tutoriales.css">
<body>
<div id="top" class="jumbotron text-center">
  	<br><h2><b>Turnitin</b></h2>      
</div>
<div class="container">
			<div class="row">
				<div class="col-md-6">
					<br><img src="images/Turnitin.PNG" class="img-responsive margin" style="display:inline" width="800" height="800" alt="Image"><br><br>
				</div>
				<div class="col-md-6 text-justify">
					<p><h4>TURNITIN es un recurso disponible para los profesores que les permite someter a revisi&oacute;n los trabajos subidos por sus alumnos, de manera tal de poder saber el porcentaje de similitud que tienen unos con otros, y a la vez con otros documentos disponibles en internet. Pudiendo eventualmente detectarse una copia. </h4></p>
				</div>
			</div>
	<hr class="featurette-divider"/>
	<div class="row">
		<div class="col-md-12 text-center">
			<h4>Para que el sistema funcione en su totalidad lo primero es crear una actividad turnitin y luego de que los alumnos realicen sus entregas, estas deber&aacute;n ser revisadas.</h4>
		</div>
	</div>
		<hr class="featurette-divider"/>
	<div class="row">
    	<div class="col-md-6 text-center">
    		<a href="#Crear">
    		<p><h3>Crear actividad turnitin</h3></p>
     	 	<span class="glyphicon glyphicon-pencil icono text-center"><br></span>
    		</a><br><br>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n de c&oacute;mo crear una actividad de turnitin.
    	</div>
    	<div class="col-md-6 text-center">
    		<a href="#Entregas">
    		<p><h3>Revisi&oacute;n Entregas</h3></p>
      		<span class="glyphicon glyphicon-ok icono text-center"></span>
    		</a><br><br>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n de como revisar el contenido entregado por los alumnos.
   		</div>
	</div>
	<!-- Creacion actividad turnitin -->

	<?php include("turnitin_crear_actividad.php")?>

 <!-- Revisar Entregas -->

	<?php include("turnitin_entregas.php")?>

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