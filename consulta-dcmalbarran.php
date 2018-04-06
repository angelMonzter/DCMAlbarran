<?php
	$conexion=mysqli_connect('localhost','root','root','dcmalbarran');
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DCM Albarran</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/dcm1.css">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-116354335-1');
    </script>
    <script src="js/password-consulta.js"></script>
</head>
<body>

<script>validarPassword(); </script>
  
<script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>
    <script>
function sololetras(e){
  key=e.keyCode || e.which;
  teclado=String.fromCharCode(key).toLowerCase();
  letras=" abcdefghijklmnñopqrstuvwxyz";
  especiales="8-37-38-46-164";
  teclado_especial=false;
  
  for(var i in especiales){
    if(key==especiales[i]){
    teclado_especial=true; break;
    }
  }
  if(letras.indexOf(teclado)==-1 && !teclado_especial){
    return false;
  }
}
</script>

    <!--slider script-->
<script>
        /*Cargador de eventos al iniciar la página*/
    window.addEventListener('load',iniciar,false);
    /*Contador inicializado en cero*/
    var contador=0;
    function iniciar(){
        setInterval('cambiarImg()',3000);
    }
    function cambiarImg(){
        var obj=document.getElementById('slider');
        var obj2=obj.getElementsByTagName('img');
        if(contador==obj2.length){
            for(var i=0; i<obj2.length; i++){
                obj2[i].style.opacity='0';
                contador--;
            }
            obj2[contador].style.opacity='1';
        }
        else{
        obj2[contador].style.opacity='1';
        contador++
        }
    }
</script>
<!--slider script-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-2195009-2', 'auto');
      ga('send', 'pageview');
      ga('create', 'UA-2195009-27', 'auto', {name: "foundation"});
      ga('foundation.send', 'pageview');
    </script>

<section>
   
  <div id="Conocenos1" class="row large-6 colunms tabcontent">
    <br>
    <h3 class="fuente" align="center">Consulta de Registros</h3>
    <hr>
    <br>
      <div align="center" class="medium-uncollapse">
    
		<table>
			<thead>
				<tr>
          <th width="150" class="fuente">ID</th>
					<th width="250" class="fuente">Nombre</th>
					<th width="250" class="fuente">Telefono</th>
					<th width="250" class="fuente">Estudiante</th>
					<th width="250" class="fuente">Correo</th>
					<th width="250" class="fuente">Detalles</th>
          <td width="250" class="fuente" align="center">Municipio</td>
          <th width="250" class="fuente">Acción</th>
				</tr>

			</thead>
			<?php
				$sql="SELECT * from postular";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
			?>
			<tbody>
        <td><?php echo $mostrar['id_post']?></td>
				<td><?php echo $mostrar['nombre']?></td>
				<td><?php echo $mostrar['telefono']?></td>
				<td><?php echo $mostrar['estudiante']?></td>
				<td><?php echo $mostrar['correo']?></td>
				<td><?php echo $mostrar['detalles']?></td>
				<td><?php echo $mostrar['municipio2']?></td>
        <td >
          <a onclick="preguntar(<?php $mostrar['id_post'];?>)" class="button small" id="boton" href="php/borrar.php?id_post=<?php echo $mostrar['id_post']?>">Eliminar</a>
          
        </td>
			</tbody>
			<?php
				}
			?>

		</table>    
      </div>
  </div>

</section>
<br><br><br><br><br><br><br><br><br><br><br><br><br>

<div style="background-color: #712c2f ;color: white; font-size: 15px; ">
  <br>
    <div class="row">
        <div class="small-6 large-4 columns">
          <p class="lead">Compañia</p>
          <ul class="menu vertical">
            <li><p style="font-size: 15px;" href="#">DCM Albarran S.A de C.V. <br> Distribuidor Autorizado.</p></li>
          </ul>
        </div>
        <div class="small-6 large-4 columns">
          <p class="lead">Terminos y Conidiciones</p>
          <ul class="menu vertical">
            <li><a style="color: white;" href="#">Politica De Privacidad</a></li>
            <li><a style="color: white;" href='https://www.freepik.es/vector-gratis/conjunto-de-iconos-de-educacion_1148964.htm'>Icons Designed by Freepik</a></li>
          </ul>
        </div>
        <div class="small-6 large-4 columns">
          <p class="lead">Copyright by <img style="width: 170px;" src="img/DCM-Albarran-M1.png" alt="DCM Albarran"></p>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>

<script type="text/javascript">
    function preguntar(id_post){
        if (confirm("Esta seguro de eliminar el registro ?[" + id_post + "]?")==true) {
         return true;
          
        }else{
          return false;
        }
    }
    
  </script>
