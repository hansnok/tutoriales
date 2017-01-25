<head>
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
        <a href="index.php" class="navbar-brand"><b>WebC Tutoriales</b></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
	        <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Roles<b class="caret"></b></a>
	            <ul class="dropdown-menu">
		            <li><a href="coordinadores.php">Coordinadores</a></li>
		            <li><a href="profesores.php">Profesores</a></li>
		            <li><a href="ayudantes.php">Ayudantes</a></li>
		            <li><a href="alumnos.php">Alumnos</a></li>
	            </ul>
	        </li>
	        <li> <a href="http://webcursos.uai.cl/">Webcursos</a></li>
	        <li> <a href="http://www.uai.cl/">UAI</a></li>
    			</ul>
    </div>
</nav>
<script type="text/javascript">
(function($){
	$(document).ready(function(){
		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});
	});
})(jQuery);
</script>
