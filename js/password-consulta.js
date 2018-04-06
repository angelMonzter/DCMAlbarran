
    function validarPassword(){
      texto = prompt("Para ver la página introduzca su contraseña");
      while(texto!="equipodcm"){
        texto = prompt("Para ver la página introduzca su contraseña");
        alert("contraseña incorrecta");window.history.back();
      }
      alert("Password Correcta");
    }
