<?php

include("php/conexion.php");
conectar();

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
</head>
<body>
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
    <form autocomplete="off" method="POST" action="php/postularse.php">
  <div id="Conocenos1" class="row large-6 colunms tabcontent">
    <br>
    <h3 class="fuente" align="center">Postularme</h3>
    <hr>
    <br>
      <div align="center" class="medium-uncollapse">
      <div class="medium-uncollapse large-collapse">
          <div class="small-6 columns">
              <label>Nombre:
                <input type="text" placeholder="Nombre Completo" name="nombre" id="" onkeypress="return sololetras(event)">
              </label>
          </div>
          <div class="small-6 columns">
              <label>Correo:
                <input type="email" placeholder="DCM@hotmail.com" name="correo" id="">
              </label>
          </div>
      </div>
      <div class="medium-uncollapse large-collapse">
          <div class="small-6 columns">
              <label>Telefono:
                <input type="text" placeholder="Numero De Telefono" name="telefono" id="" onkeypress="return valida(event)" maxlength="10">
              </label>
          </div>
          <div class="small-6 columns">
              <label>Detalles Extra:
                <textarea name="detalles" id="" cols="10" rows="3" placeholder="Detalles"></textarea>
              </label>
          </div>
      </div>
      <div class="medium-uncollapse large-collapse">
          <div class="small-6 columns">
              <label>Estudiante:
                <select name="estudiante" id="estudiante">
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                </select>
              </label>
          </div>

          <div class="small-6 columns">
            <label>Colonia:
                <select name="municipio" id="municipio">
                  <option value="Almoloya">Almoloya</option>
                  <option value="Centro">Centro</option>
                  <option value="Benito Juárez">Benito Juárez</option>
                  <option value="Cacalomacán">Cacalomacán</option>
                  <option value="Colón">Colón</option>
                  <option value="Del Tejocote">Del Tejocote</option>
                  <option value="El Calvario">El Calvario</option>
                  <option value="Guadalupe">Guadalupe</option>
                  <option value="Isidro Fabela">Isidro Fabela</option>
                  <option value="La Alameda">La Alameda</option>
                  <option value="La Crespa">La Crespa</option>
                  <option value="La Magdalena">La Magdalena</option>
                  <option value="La Teresona">La Teresona</option>
                  <option value="Paseo Tollocan INFONAVIT">Paseo Tollocan INFONAVIT</option>
                  <option value="San Andrés">San Andrés</option>
                  <option value="Rancho Buenavista">Rancho Buenavista</option>
                  <option value="Buenavista">Buenavista</option>
                  <option value="Capultitlán">Capultitlán</option>
                  <option value="Altamirano">Altamirano</option>
                  <option value="La Loma">La Loma</option>
                  <option value="San Marcos">San Marcos</option>
                  <option value="Calixtlahuaca">Calixtlahuaca</option>
                  <option value="Santa Cruz Atzcapotzaltongo">Santa Cruz Atzcapotzaltongo</option>
                  <option value="El Seminario">El Seminario</option>
                  <option value="Sauces">Sacuces</option>
                  <option value="Zinacantepec">Zinacantepec</option>
                </select>
              
            </label>

          </div>
      </div>
      <input type="submit" name="" id="button" class="button Racing" value="Enviar">
     
      </div>

    <li><a href="consulta-dcmalbarran.php" class="fuente">Ver Registros</a></li>
  </div>

 </form>
</section>
<br><br><br>
<div style="background-color: #712c2f ;color: white; font-size: 15px;">
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
