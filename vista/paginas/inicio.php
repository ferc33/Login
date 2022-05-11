  <?php 
  $usuarios = ControladorFormularios::ctrSeleccionarRegistros();
  ?>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th><!--Columnas del formulario-->
        <th>Email</th>
        <th>Fecha</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($usuarios as $key => $value): ?>
           <td><?php echo ($key+1); ?> </td> 
        <td><?php echo $value["nombre"]; ?> </td> <!--filas del formulario-->
        <td><?php echo $value["email"]; ?></td>
        <td><?php echo $value["fecha"]; ?> </td>

        <td>
        <div class = "button-group">
        <button class = "btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
        <button class = "btn btn-danger"><i class="fa-solid fa-trash"></i></button>
        </div>

        <td>

        </tr>
         <?php endforeach ?>
        </tbody>
  </table>