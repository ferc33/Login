<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>LOGO</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!--BUSCAR EN BOOTSTRAP 4-->

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Latest compiled Awesome font -->
    <script src="https://kit.fontawesome.com/538ced9db2.js" crossorigin="anonymous"></script>
</head>

<!--BOTONES-->

<body> 
	<div class="container-fluid">

		<h3 class="text-center py-3" >LOGO</h3>

	</div>
	<div class="container-fluid bg-light">
		<div class="container">
            <ul class="nav nav-justified py-2 nav-pills container-fluid ">
              <?php if (isset($_GET["pagina"])): ?> <!--  -->
              <?php if ($_GET["pagina"]== "registro"): ?>
               <li class="nav-item ">
                <a class="nav-link active"  href="index.php?pagina=registro">Registro </a>
            </li>
        <?php else: ?>
            <li class="nav-item "> <!--aparece desactivado -->
                <a class="nav-link" href="index.php?pagina=registro">Registro </a>
            </li>
        <?php endif ?>
        <?php if($_GET["pagina"] == "ingreso"): ?>
         <li class="nav-item">
            <a class="nav-link active" href="index.php?pagina=ingreso" >Ingreso</a>
        </li>
        <?php else: ?>
            <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=ingreso" >Ingreso</a>
        </li>
        <?php endif ?>
        <?php if($_GET["pagina"] == "inicio"): ?> 
              <li class="nav-item">
             <a class="nav-link active " href="index.php?pagina=inicio" >Inicio</a>
            </li>
        <?php else: ?>
                     <li class="nav-item">
             <a class="nav-link " href="index.php?pagina=inicio" >Inicio</a>
            </li>
        <?php endif ?>
         <?php if($_GET["pagina"] == "salir"): ?> 
              <li class="nav-item">
             <a class="nav-link active" href="index.php?pagina=salir" >Salir</a>
            </li>
        <?php else: ?>
                     <li class="nav-item">
             <a class="nav-link" href="index.php?pagina=salir" >Salir</a>
            </li>
        <?php endif ?>

    <?php endif ?>

</ul>
</div>
</div>

<!--    CONTENIDO     -->
<div class="container-fluid bg-light">
    <div class="container">
        <?php //Lista blanca. 
        if(isset($_GET['pagina'])){
            if($_GET['pagina']=="registro" ||
                $_GET['pagina']=="ingreso" ||
                $_GET['pagina']=="inicio" ||
                $_GET['pagina']=="salir"){

                include "paginas/".$_GET["pagina"].".php";
        }else {//SINO EXISTE LA PAGINA ERROR 404.
                include "paginas/error404.php";
        }

    }else {
        include "paginas/inicio.php";

    }

    ?>

</div>
</div>
</body>
</html>