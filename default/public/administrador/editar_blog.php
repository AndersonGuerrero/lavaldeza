<?php
include('sesion.php');
include("conexion.php");

$id=$_POST['id'];
$titulo = $_POST['titulo']; 
$texto = $_POST['texto'];
$subtitulo = $_POST['subtitulo'];
$descripcion = $_POST['descripcion'];

$fecha_nueva = date("Y-m-d_H-i-s");

$archivo = $_FILES['adjunto']['name']; 
$archivob = $_FILES['adjuntob']['name']; 

$directorio = "mela/uploads/"; 

if ($archivo!=""){

	if (is_uploaded_file($_FILES['adjunto']['tmp_name'])) {
	$file = $directorio . $fecha_nueva."_".$_FILES['adjunto']['name'];
	@copy($_FILES['adjunto']['tmp_name'], $file); 
	$subio = true; 
	} 

	mysql_query("UPDATE blog SET img_inicio='$file', titulo='$titulo', texto='".addslashes($texto)."', subtitulo='$subtitulo',descripcion='".addslashes($descripcion)."' WHERE id='$id'");


}else{
	mysql_query("UPDATE blog SET titulo='$titulo', texto='".addslashes($texto)."', subtitulo='$subtitulo',descripcion='".addslashes($descripcion)."' WHERE id='$id'");
}

if ($archivob!=""){

	if (is_uploaded_file($_FILES['adjuntob']['tmp_name'])) {
	$fileb = $directorio . $fecha_nueva."_".$_FILES['adjuntob']['name'];
	@copy($_FILES['adjuntob']['tmp_name'], $fileb); 
	$subio = true; 
	} 

	mysql_query("UPDATE blog SET img_noticia='$fileb', titulo='$titulo', texto='".addslashes($texto)."', subtitulo='$subtitulo',descripcion='".addslashes($descripcion)."' WHERE id='$id'");


}else{
	mysql_query("UPDATE blog SET titulo='$titulo', texto='".addslashes($texto)."', subtitulo='$subtitulo',descripcion='".addslashes($descripcion)."' WHERE id='$id'");
}


echo "<script language='javascript'>window.location.href='configuracion.php';</script>";

 ?>


