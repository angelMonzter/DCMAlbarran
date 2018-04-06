<?php

function conectar(){
	global $conex;
	$usr="root";
	$psw="root";
	$serv="localhost";
	$bd="dcmalbarran";

	$conex=mysqli_connect($serv, $usr, $psw) or die(mysql_error());

	mysqli_select_db($conex,$bd) or die(mysql_error());
	
	//$conex = mysqli_connect($serv, $usr, $psw, $bd) or die(mysqli_connect_error());
	return $conex;
}
function borrar($id){
	global $conex;
	$sql ="DELETE FROM postular WHERE id_post= {$id}";
	$conex=query($sql);
}
?>