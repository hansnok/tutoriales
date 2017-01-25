<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php include("header.php")?>
<link rel="stylesheet" href="estilo.css">
<link rel="stylesheet" href="tutoriales.css">
<body>
<div id="top" class="jumbotron text-center">
  	<br><h2><b>Informaciones varias</b></h2>      
</div>
	<div class="container">
				<div class="row">
					<div class="col-md-6 text-center">
    					<iframe allowfullscreen width="470" height="300" src="https://www.youtube.com/embed/zO5id2o7XPw" frameborder="0"></iframe><br>
					</div>
					<div class="col-md-6 text-justify">
						<h4>Desde c&oacute;mo funciona el foro hasta como convertir un archivo Word en pdf, inf&oacute;rmese de todas las funciones que posee webcursos y de otras cosas que le facilitaran el uso de la plataforma.</h4>
					</div>
		</div>
		<hr class="featurette-divider" />
		<div class="row">
			<div class="col-md-12 text-center">
				<h4>Debe dominar lo presentado a continuaci&oacute;n para un uso correcto de la plataforma Webcursos.</h4>
			</div>
		</div>
		<hr class="featurette-divider" />
		<div class="row">
			<div class="col-md-3 text-center">
				<a href="#PDF">
					<p>
					
					<h3>Convertir archivo Word a PDF</h3>
					</p> <span class="glyphicon glyphicon-file"></span>
				</a> <br> <br>
				<p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n sobre como convertir un archivo word en PDF</p>
			</div>
			<div class="col-md-3 text-center">
				<a href="#Foro">					
					<h3>Como funciona el foro</h3><br>
					<span class="glyphicon glyphicon-comment"></span>
				</a><br> <br>
				<p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n sobre como funciona el foro</p>
			</div>
			<div class="col-md-3 text-center">
				<a href="#Glosario">
					<h3>Para que sirve el glosario</h3> <span
					class="glyphicon glyphicon-book"></span>
				</a><br> <br>
				<p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n sobre el glosario.</p>
			</div>
			<div class="col-md-3 text-center">
				<a href="#Libro">
					<h3>Libro Calificador</h3><br> <span class="glyphicon glyphicon-pencil"></span>
				</a><br> <br>
				<p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n sobre el libro calificador y sus usos.</p>
			</div>
		</div>
		
	<!-- Word a PDF -->
		
	<?php include("tutorial_word_pdf.php")?>
	
	<!-- Foro -->

	<?php include("tutorial_foro.php")?>

	<!-- Para que sirve el Glosario -->

	<?php include("tutorial_glosario.php")?>

	<!-- Libro Calificador -->

	<?php include("tutorial_libro_calificador.php")?>

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