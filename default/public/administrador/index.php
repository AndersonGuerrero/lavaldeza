<?php
   include("conexion.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $usuario = mysqli_real_escape_string($db,$_POST['usuario']);
      $clave = mysqli_real_escape_string($db,$_POST['clave']); 
      
      $sql = "SELECT id FROM usuario WHERE usuario = '$usuario' and clave = '$clave'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
      
      $count = mysqli_num_rows($result);
        
      if($count == 1) {
        
         $_SESSION['login_user'] = $usuario;
         
         header("location:configuracion.php");
      }else {
         echo "<script language='javascript'>alert('Tu usuario o clave es invalido');</script>";
        
      }

   
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>Administrador</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/londinium-theme.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/icons.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


</head>

<body class="full-width page-condensed">

	<!-- Login wrapper -->
	<div class="login-wrapper">
    	<form  class="login" action="#" method="POST" role="form">
			<div class="popup-header">
			
				<span class="text-semibold">Login - Administrador</span>
				
			</div>
			<div class="well">
				<div class="form-group has-feedback">
					<label>Usuario</label>
					<input type="text" name="usuario" class="form-control" placeholder="usuario">
					<i class="icon-users form-control-feedback"></i>
				</div>

				<div class="form-group has-feedback">
					<label>Clave</label>
					<input type="password" name="clave" class="form-control" placeholder="clave">
					<i class="icon-lock form-control-feedback"></i>
				</div>

				<div class="row form-actions">
					<div class="col-xs-6">
						
					</div>

					<div class="col-xs-6">
						<button type="submit" class="btn btn-warning pull-right"><i class="icon-menu2"></i> Acceder</button>
					</div>
				</div>
			</div>
    	</form>
	</div>  
	<!-- /login wrapper -->

</body>
</html>