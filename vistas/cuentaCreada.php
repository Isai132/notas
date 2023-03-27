<?php
require '../includes/conexion.php';
$name = $_POST['nombre'];
$lastname = $_POST['apellido'];
$user = $_POST['usuario'];
$pass = $_POST['contraseña'];

$sql = "INSERT INTO usuarios (nombre, apellido, usuario, contraseña) VALUES ('$name', '$lastname', '$user', '$pass')";
	$resultado = $mysqli->query($sql); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/inicio.css">
  <title>Web Notas</title>
</head>
<body>
  <div class="titulo p-3 text-white text-center">
    <H1>Web notas</H1>
    <p>La forma mas facil de guardar tus ideas</p>
  </div>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Inicio de sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="crearCuenta.php">Crea una cuenta</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container p-4">
    <div class="shadow contenedor container mt-5 p-4 bg-white text-center">
      <form action="vistas/cuentaCreada.php" method="POST">
        <div class="mb-4 mt-4 row">
          <?php if($resultado) { ?>
						<h3>Cuenta creada</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
        <div class="d-grid">
          <button type="button" onclick="location.href='../index.php'" class="btn entrar mt-3">Iniciar Sesión</button>
        </div>
      </form>
    </div>
  </div>
  <footer class="abajo mb-0 p-3 bg-secondary text-white text-center">
    <p>© Derechos Reservados 2023 WebApp Notas</p>
  </footer>
</body>
</html>
