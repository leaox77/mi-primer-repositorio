<?php 
require "sistemaVPD.php";

/*POST nos permite recuperar datos enviados desde formularios con el m�todo POST. Se env�a de forma no visible*/
$ci=$_POST["txtci"];
$pat=$_POST["txtPaterno"];
$mat=$_POST["txtMaterno"];
$nom=$_POST["txtNombre"];
$fecha=$_POST["fechaNac"];
$dir=$_POST["txtDir"];

/*echo $ci."<br>";
echo $pat."<br>";
echo $mat."<br>";
echo $nom."<br>";
echo $fecha."<br>";
echo $dir."<br>";*/

$sql="update ejemplo set ci='$ci',paterno='$pat',materno='$mat',nombres='$nom', fechaNac='$fecha', direccion='$dir' WHERE ci='$ci'";

/*echo $sql;*/

$obj=new sistemaVPD();
$obj->update($sql, $con);
header("location: CRUD.php");
exit();
?>