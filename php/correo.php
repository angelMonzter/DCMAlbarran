<?php 

	$nombre = $_POST['nombre'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];

	
	mail('monzter252@gmail.com',$nombre, $asunto, $mensaje);
	
	?>
<body>
		<script type="text/javascript">
		
		window.location="../index.html";
		</script>
</body>

	<?php


 ?>
