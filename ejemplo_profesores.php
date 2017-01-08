<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php include("header.php")?>
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" href="estilo.css">
<body>
<div class="jumbotron text-center">
  	<h1>Profesores y ayudantes</h1>      
  	<p>Los profesores y ayudantes deben cumplir las siguientes funciones: .</p>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
		</div>
		<div class="col-sm-9">
			<div class="row">
				<div class="col-sm-6">
					<div class="feature-item">
						<h4><span class="glyphicon glyphicon-play"></span><a href="emarking.php"> E-Marking</h4></a>
						<p>descripcion breve</p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="feature-item">
						<h4><span class="glyphicon glyphicon-play"></span><a href="acciones_cursos.php">Acciones cursos</a></h4>
						<p>descripcion breve</p>
					</div>
				</div>  
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="feature-item">
						<h4><span class="glyphicon glyphicon-play"></span> Area 3</h4>
						<p>descripcion breve</p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="feature-item">
						<h4><span class="glyphicon glyphicon-play"></span> Area 4</h4>
						<p>descripcion breve</p>
					</div>
				</div>  
			</div>
		</div>
	</div>
	<hr class="featurette-divider"/>
</div>
<div class="container">
    <div class="row">
		<div class="col-md-12">
                <div id="Carousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">           
                <div class="item active">
                	<div class="row">
                	  <div class="col-md-4 text-center"><a href="#" class="thumbnail"><iframe width="300" height="250" src="http://www.youtube.com/embed/ernR7ahcqyw?feature=player_detailpage" frameborder="0"></iframe>tutorial edicion de perfil</a></div>
                	  <div class="col-md-4 text-center"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">tutorial descarga de archivos</a></div>
                	  <div class="col-md-4 text-center"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">tutorial de algo</a></div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                	<div class="row">
                		<div class="col-md-4 text-center"><a href="#" class="thumbnail"><iframe width="300" height="250" src="http://www.youtube.com/embed/ernR7ahcqyw?feature=player_detailpage" frameborder="0"></iframe>desisncripcion de ramos</a></div>
                		<div class="col-md-4 text-center"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">como crear un buzon en turnitin</a></div>
                		<div class="col-md-4 text-center"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">algo mas aqui</a></div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                	<div class="row">
                		<div class="col-md-4 text-center"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">tutorial 4s</a></div>
                		<div class="col-md-4 text-center"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">tutorial 5</a></div>
                		<div class="col-md-4 text-center"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">tutorial 6</a></div>
                	</div><!--.row-->
                </div><!--.item-->
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control"><</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control">></a>
                </div><!--.Carousel-->
		</div>
	</div>
</div>
<br><br><br><br><br>
<div id="foot">
	<div class="footer">&copy; <?php echo date('Y');?> Universidad Adolfo Ib&aacute;&ntilde;ez</div>
	<div id="social">
		<div class="facebook">
			<a href="https://www.facebook.com/coordinador.webcursosuai">
			<img width="50" height="50" src="images/facebook.png">
			</a></div>
		<div class="twitter">
			<a href="https://twitter.com/UAI_CL">
		<img width="50" height="50" src="images/twitter.png">
		</a></div>
	</div>
</div>
</body>
<script type="text/javascript">
$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});
</script>