<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
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
      <h3>Registrate</h3>
      <form action="cuentaCreada.php" method="POST">
        <div class="mb-4 mt-4 row">
          <div class="col">
            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
          </div>
          <div class="col">
            <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="apellido">
          </div>
        </div>
        <div class="mb-4">
          <input type="text" class="form-control" id="usuario" placeholder="Usuario" name="usuario">
        </div>
        <div class="mb-4">
          <input type="password" class="form-control" id="contraseña" placeholder="Contraseña" name="contraseña">
        </div>
        <div class="d-grid">
          <button type="submit" class="btn entrar btn-block">Crear cuenta</button>
        </div>
      </form>
    </div>
  </div>
  <footer class="abajo mb-0 p-3 bg-secondary text-white text-center">
    <p>© Derechos Reservados 2023 WebApp Notas</p>
  </footer>
</body>
</html>