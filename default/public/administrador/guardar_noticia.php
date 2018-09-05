<?php
include('sesion.php');
include("conexion.php");

$titulo = $_POST['titulo']; 
$texto = $_POST['texto'];
$subtitulo = $_POST['subtitulo'];
$descripcion = $_POST['descripcion'];
$fecha = date("Y-m-d");

$fecha_nueva = date("Y-m-d_H-i-s");

$archivo = $_FILES['adjunto']['name']; 
$archivob = $_FILES['adjuntob']['name']; 

$directorio = "mela/uploads/"; 

if ($archivo!="" and $archivob!=""){

if (is_uploaded_file($_FILES['adjunto']['tmp_name'])) {
$file = $directorio .$fecha_nueva."_". $_FILES['adjunto']['name'];
@copy($_FILES['adjunto']['tmp_name'], $file); 
$subio = true; 
} 

if (is_uploaded_file($_FILES['adjuntob']['tmp_name'])) {
$fileb = $directorio .$fecha_nueva."_". $_FILES['adjuntob']['name'];
@copy($_FILES['adjuntob']['tmp_name'], $fileb); 
$subio = true; 
} 

mysql_query("INSERT INTO blog SET img_inicio='$file',img_noticia='$fileb', titulo='$titulo', fecha='$fecha', texto='".addslashes($texto)."', subtitulo='$subtitulo',descripcion='".addslashes($descripcion)."'");

}

echo "<script language='javascript'>window.location.href='configuracion.php';</script>";

 ?>