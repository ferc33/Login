<!-- CODIGO HTML + PHP-->
      
<!-- VISTA-->

<div class ="d-flex justify-content-center">
    <form class="p-5 bg-light" method="post"> <!--VARIABLE POST-->
       <!--NOMBRE-->
       <div class="form-group">
         <label for="nombre">Nombre:</label>     
         <!--Añadir icono a los inputs (campos de ingreso de datos)-->   
         <div class = "input-group">     
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-user"></i> <!--ICONO BUSCAR EN FONTAWESOME--> 
                </span> 
            </div>
            <input type="text" class="form-control"  id="nombre" name="registroNombre">
        </div>
    </div>
    <!--ICONO CORREO-->
    <div class="form-group">
        <label for="nombre">Correo:</label>
        <div class = "input-group">     
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa-solid fa-envelope-open-text"></i></span> <!--buscar html en fontawesome-->
            </div>
            <input type="text" class="form-control" id="email" name="registroEmail">
        </div>
        <!--ICONO PASSWORD-->        
        <div class="form-group">
            <label for="pwd">Contraseña:</label>
            <div class = "input-group"> 
                <div class="input-group-prepend"> 
                    <span class="input-group-text">
                        <i class="fa-solid fa-key"></i>
                    </span> <!--icono llave--> 
                </div> 
                <input type="password" class="form-control" id="pwd" name ="registroPassword"> 
            </div>
        </div>      
        <?php 
        $registro =  ControladorFormularios::ctrRegistro();
        if($registro ==  "ok" ) {

          echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
          echo '<script>
          if(window.history.replaceState){
              window.history.replaceState(null, null, window.location.href);
          }   

          </script>';

      }
          // Script que borra el historial de variables POST.
      ?> 
      <button type="submit" class="btn btn-primary">Enviar</button> 
  </form>
</div>