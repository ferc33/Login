<div class ="d-flex justify-content-center">
    <form class="p-5 bg-light" method="post"> <!--VARIABLE POST-->
       <!--ICONO CORREO-->
    <div class="form-group">
        <label for="nombre">Correo:</label>
        <div class = "input-group">     
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa-solid fa-envelope-open-text"></i></span> <!--buscar html en fontawesome-->
            </div>
            <input type="text" class="form-control" id="email" name="ingresoEmail">
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
                <input type="password" class="form-control" id="pwd" name ="ingresoPassword"> 
            </div>
        </div>      
        <?php 
        $ingreso =  new ControladorFormularios();
        $ingreso -> ctrIngreso();
      
          // Script que borra el historial de variables POST.
      ?> 
      <button type="submit" class="btn btn-primary">Ingresar</button> 
  </form>
</div>