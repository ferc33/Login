<!DOCTYPE html>
<html lang="en">
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
<body> 
	<div class="container-fluid">
		<h3 class="text-center py-3" >LOGO</h3>
	</div>
	<div class="container-fluid bg-light">
		<div class="container">
            <ul class="nav nav-justified py-2 nav-pills ">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php?pagina=registro.php">Registro </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=ingreso.php" >Ingreso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=inicio.php" >Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=salir.php" >Salir</a>
                </li>
            </ul>
        </div>
    </div>

    <!--    CONTENIDO     -->
    <div class="container-fluid bg-light">
        <div class="container">
            <?php 
            if(isset($_GET['pagina'])){
                if($_GET['pagina']=="registro" ||
                    $_GET['pagina']=="ingreso" ||
                    $_GET['pagina']=="inicio" ||
                    $_GET['pagina']=="salir"){

                    include "paginas/".$_GET["pagina"].".php";
            }
            
        }else {
            include "paginas/registro.php";
            
        }

        ?>

    </div>
</div>
</body>
</html>