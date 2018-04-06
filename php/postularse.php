<?php
include("conexion.php");
conectar();
// variables
$nombre= $_POST['nombre'];
$correo=$_POST['correo'];
$telefono= $_POST['telefono'];
$detalle=$_POST["detalles"]; 
$estudiante=$_POST['estudiante'];
//$encrip=password_hash($contrasena,PASSWORD_DEFAULT);
if (empty($nombre && $correo && $telefono && $detalle && $estudiante)) {
	?>
	<script type="text/javascript">
		alert("Favor de llenar todos los campos...");
		window.location="../postularme-dmcalbarran.html";
	</script>
	<?php
}else{
	$consulta=mysqli_query($conex,"insert into postular (`id_post`, `nombre`, `telefono`, `estudiante`, `correo`, `detalles`) values (NULL, '$nombre', '$telefono', '$estudiante', '$correo', '$detalle')") or die (mysql_error($consulta));

	?>
<body>
		<script type="text/javascript">

		window.location="../index.html";
		</script>
</body>

	<?php
}
mysql_close($conex);
?>