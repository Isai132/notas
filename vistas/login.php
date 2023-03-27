<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/inicio.css">
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
          <a class="nav-link active" href="./index.php">Inicio de sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="vistas/crearCuenta.php">Crea una cuenta</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container p-4">
    <div class="shadow contenedor container mt-5 p-4 bg-white text-center">
      <h3>Bienvenidos</h3>
      <form action="" method="POST">
        <?php
          if (isset($errorLogin)) 
            echo $errorLogin;
          ?>
        <div class="mb-4 mt-4">
          <input type="text" class="form-control" placeholder="Usuario" name="username">
        </div>
        <div class="mb-4">
          <input type="password" class="form-control" placeholder="Contraseña" name="password">
        </div>
        <div class="d-grid">
          <button type="submit" value="Iniciar Sesión" class="btn entrar btn-block">Entrar</button>
        </div>
        <hr>
        <button type="button" onclick="location.href='vistas/crearCuenta.php'"  class="cuenta btn ">Crear cuenta nueva</button>
      </form>
    </div>
  </div>
  <footer class="abajo mb-0 p-3 bg-secondary text-white text-center">
    <p>© Derechos Reservados 2023 WebApp Notas</p>
  </footer>
</body>
</html>