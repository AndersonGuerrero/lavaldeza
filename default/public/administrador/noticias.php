<?php 
include('sesion.php');
include("conexion.php");   

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>Noticia</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/londinium-theme.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/icons.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/plugins/charts/sparkline.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/uniform.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/inputmask.js"></script>
<script type="text/javascript" src="js/plugins/forms/autosize.js"></script>
<script type="text/javascript" src="js/plugins/forms/inputlimit.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/listbox.js"></script>
<script type="text/javascript" src="js/plugins/forms/multiselect.js"></script>
<script type="text/javascript" src="js/plugins/forms/validate.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/tags.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/switch.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/uploader/plupload.queue.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/wysihtml5/toolbar.js"></script>

<script type="text/javascript" src="js/plugins/interface/daterangepicker.js"></script>
<script type="text/javascript" src="js/plugins/interface/fancybox.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/moment.js"></script>
<script type="text/javascript" src="js/plugins/interface/jgrowl.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/colorpicker.js"></script>
<script type="text/javascript" src="js/plugins/interface/fullcalendar.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/timepicker.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/application.js"></script>


</head>

<body>
<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><small>Administrador</small></a>
			<a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
				<span class="sr-only">Toggle navbar</span>
				<i class="icon-grid3"></i>
			</button>
			<button type="button" class="navbar-toggle offcanvas">
				<span class="sr-only">Toggle navigation</span>
				<i class="icon-paragraph-justify2"></i>
			</button>
		</div>

		<ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">

		

			<li class="user dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<span>Admin</span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right icons-right">
					<li><a href="logout.php"><i class="icon-exit"></i> Salir</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- Page container -->
 	<div class="page-container">


		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-content">

				<!-- User dropdown -->
				<div class="user-menu dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="mela/perfil.jpg">
						<div class="user-info">
							Mela Piedrahita<span>Administradora</span>
						</div>
					</a>
					
				</div>
				<!-- /user dropdown -->


				<!-- Main navigation -->
				<ul class="navigation">
					<li><a href="configuracion.php"><span>Inicio</span> <i class="icon-screen2"></i></a></li>
					<li class="active"><a href="noticias.php"><span>Nueva noticia</span> <i class="icon-plus"></i></a></li>
					<li><a href="#"><span>Configuraciones Generales</span> <i class="icon-cogs"></i></a></li>
					
				</ul>
				<!-- /main navigation -->
				
			</div>
		</div>
		<!-- /sidebar -->


		<!-- Page content -->
	 	<div class="page-content">


			<!-- Page header -->
			<div class="page-header">
				<div class="page-title">
					<h3><img src="mela/logo.png" alt="" width="150px"> <small>Bienvenida al panel administrativo, cualquier inconveniente comunicate con nosotros</small></h3>
				</div>
			</div>
			<!-- /page header -->
<!-- Callout -->
			<div class="callout callout-danger fade in">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<h5>Importante!</h5>
				<p>Tome en cuenta las medidas indicadas para cada imagen, recuerde si no sigue estas reglas implicara una incorrecta visualizacion en la pagina.</p>
			</div>
            <!-- /callout -->


	        <!-- WYSIWYG editor -->
			<form class="block" action="guardar_noticia.php" enctype="multipart/form-data" method="POST" role="form">
				<h6><i class="icon-pencil"></i>Crear noticia</h6>

				<div class="form-group">
					<input type="text" name="titulo" id="titulo" placeholder="Titulo *" class="form-control" required>			
				</div>
				<div class="form-group">
					<input type="text" name="subtitulo" id="subtitulo" placeholder="Subtitulo - Solo aplicar cuando el titulo es muy corto" class="form-control">			
				</div>
				<div class="form-group">
					<textarea rows="5" cols="5" name="descripcion" class="form-control" placeholder="Descripcion.."></textarea>
				</div>
				<div class="block-inner">
					<textarea class="editor" name="texto" id="texto" placeholder="Escriba el contenido..."></textarea>
				</div>
				<div class="form-group">
					<label>Imagen de Inicio (Debe ser cuadrada)</label>
					<input type="file" class="styled" name="adjunto" id="adjunto">
				</div>
				<div class="form-group">
					<label>Imagen Noticia (Imagen rectangular preferiblemente y grande)</label>
					<input type="file" class="styled" name="adjuntob" id="adjuntob">
				</div>
                <div class="text-right">
	                <button type="reset" class="btn btn-danger">Cancelar</button>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>

			</form>


	        <!-- Footer -->
	        <div class="footer clearfix">
		        <div class="pull-left">&copy; 2017.  <a href="#">Steffdesign</a></div>
	        	
	        </div>
	        <!-- /footer -->


		</div>
		<!-- /page content -->


	</div>
	<!-- /page container -->

</body>
</html>