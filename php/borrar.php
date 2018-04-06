<?php 	
	
	error_reporting(E_ALL ^ E_NOTICE);//solo mandar mensajes de errores de la aplicacion
//incluimos el archivo que realiza la conexion con Mysql
	include("conexion.php");
	conectar();
//transformamos los datos obtenidos de EmpModifica.php por el metodo post a variables para agregarlas a la BD
$id_post=$_GET['id_post'];
	
	mysqli_query($conex,"DELETE FROM postular WHERE id_post ='$id_post'"); 
	
	?>
	<script type="text/javascript">
		alert("Dato eliminado...");
		window.location="../consulta-dcmalbarran.php";
	</script>
	<?php	
 ?>