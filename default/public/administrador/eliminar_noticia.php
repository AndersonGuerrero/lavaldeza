<?php
   include('sesion.php');
?>

<?php 
include("conexion.php");
$id = $_GET['id']; 

mysql_query("DELETE FROM blog WHERE id='$id'");

	echo "<script language='javascript'>window.location.href='configuracion.php';</script>";

 ?>

