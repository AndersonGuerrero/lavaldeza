<?php
error_reporting(E_ERROR);
$connection = mysql_connect("localhost", "efectome_admin", "s1256230");
$db = mysql_select_db("efectome_admin", $connection);
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select usuario from usuario where usuario='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['usuario'];

@session_start();  
if($_SESSION["login_user"] == "")
{ 
  header("Location: index.php"); 
  exit(); 
} 
?>
