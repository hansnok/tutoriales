<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php include("header.php")?>
<link rel="stylesheet" href="estilo.css">
<link rel="stylesheet" href="tutoriales.css">
<body>
<div id="top" class="jumbotron text-center">
  	<br><h2><b>E-Marking</b></h2>      
</div>
<div class="container">
	<div class="row header">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6 text-center">
						<br><iframe width="470" height="300" src="https://www.youtube.com/embed/_LfywvezuVQ" frameborder="0"></iframe><br>
				</div>
				<div class="col-md-6 text-justify">
					<p><h4>E-marking permite enviar a imprimir pruebas o controles de manera segura personalizada y organizada.<br><br>
					Permite digitalizar las respuestas de los estudiantes luego de la evaluaci&oacute;n y correcci&oacute;n, entregando a los estudiantes la versi&oacute;n digital y organizando re correcciones.<br><br>
					Podr&aacute;s corregir en l&iacute;nea utilizando rubricas, organizando correctores por pregunta y haciendo an&oacute;nima la correcci&oacute;n entre otras mejoras.</h4></p>
				</div>
			</div>
		</div>
	</div>
	<hr class="featurette-divider"/>
	<div class="row">
		<div class="col-md-12 text-center">
			<h4>Se explicar&aacute;n los distintos segmentos que conforman a E-marking de manera detallada, ya que cada uno de estos procesos es independiente, pero son de suma importancia para el desarrollo correcto de este. </h4>
		</div>
	</div>
		<hr class="featurette-divider"/>
	<div class="row">
    	<div class="col-md-3 text-center">
    		<a href="#Impresion">
    		<p><h3>Enviar a impresi&oacute;n</h3></p><br>
     	 	<span class="glyphicon glyphicon-print"></span></a>
     	 	<br><br>
    		<p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n de como mandar a imprimir una prueba que utilice el sistema de Emarking.</p>
    	</div>
    	<div class="col-md-3 text-center">
    		<a href="#Digitalizacion">
    		<p><h3>Protocolos Digitalizaci&oacute;n</h3></p><br>
      		<span class="glyphicon glyphicon-qrcode"></span></a>
      		<br><br>
    		<p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n de los pasos a seguir para digitalizar las pruebas.</p>
   		</div>
    	<div class="col-md-3 text-center">
    		<a href="#Correccion">
    		<p><h3>Correcci&oacute;n en l&iacute;nea</h3></p><br>
      		<span class="glyphicon glyphicon-pencil"></span></a>
			<br><br>
    		<p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n de como corregir en l&iacute;nea y sus beneficios.</p>
    	</div>
    	<div class="col-md-3 text-center">
    		<a href="#Rubricas">
    		<h3><p>Rubricas</p></h3><br>
      		<span class="glyphicon glyphicon-file"></span></a>
      		<br><br>
    		<p>Aqu&iacute; podr&aacute; encontrar informaci&oacute;n sobre como crear una rubrica, importarla y compartirla</p>
    	</div>
	</div>
	<!-- Impresion -->
	
	<?php include("emarking_imprimir.php")?>

 	<!-- Protocolos -->
 	
 	<?php include("emarking_protocolos.php")?>
 	
	<!-- Correccion -->
	
	<?php include("emarking_correcciones.php")?>
	
	<!-- Rubricas -->

	<?php include("emarking_rubricas.php")?>

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