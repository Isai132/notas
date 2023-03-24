<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/notas.css">
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
          <a class="nav-link" href="includes/logout.php">Cerrar sesión</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mb-5 mt-5">
    <div class="row">
      <div class="shadow columna col-sm-2 bg-white">
        <div class="mb-4 mt-4">
          <textarea type="text" rows="2" class="form-control" id="buscar" placeholder="Buscar" name="buscar"></textarea>
        </div>
        <ul class="nav nav-pills flex-column">
          <li class="etiqueta1 nav-item">
            <a class="etiqueta2 nav-link" href="#">Escuela</a>
          </li>
          <li class="nav-item">
            <a class="etiqueta nav-link" href="#">Trabajo</a>
          </li>
          <li class="nav-item">
            <a class="etiqueta nav-link" href="#"> Creatividad</a>
          </li>
          <li class="nav-item">
            <a class="etiqueta nav-link" href="#">Otras</a>
          </li>
        </ul>
        <div class="mb-2 mt-2">
          <input type="text" class="form-control" id="aEtiqueta" placeholder="Nueva Etiquta">
        </div>
        <button type="button" class="aetiqueta btn">Agregar</button>
        <hr class="d-sm-none">
      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-9">
        <h3>Hola <?php echo $user->getNombre();?></h3>
        <form action="">
          <div class="mt-2">
            <input type="text" class="form-control" id="titulo" placeholder="Titulo" >
          </div>
          <div class="mb-2">
            <textarea class="form-control" rows="10" id="comment" name="text"></textarea>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn entrar">Agregar Nota</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container mb-5 mt-5">
    <div class="row">
      <div class="p-3 shadow col-sm bg-white">
        <div class="drop1 dropdown">
          <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
            ...
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Editar</a></li>
            <li><a class="dropdown-item" href="#">Eliminar</a></li>
          </ul>
        </div>
        <h4>Ingenieria de Software</h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem nam nisi dicta voluptas laudantium aspernatur alias vel accusamus ad dolorum iure commodi, ipsum cupiditate enim voluptatibus fuga recusandae. Animi, quisquam.
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem nam nisi dicta voluptas laudantium aspernatur alias vel accusamus ad dolorum iure commodi, ipsum cupiditate enim voluptatibus fuga recusandae. Animi, quisquam.
        </p>
      </div>
      <div class="p-3 shadow col-sm bg-white">
        <div class="drop2 dropdown">
          <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
            ...
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Editar</a></li>
            <li><a class="dropdown-item" href="#">Eliminar</a></li>
          </ul>
        </div>
        <h4>Procesos Agiles</h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem nam nisi dicta voluptas laudantium aspernatur alias vel accusamus ad dolorum iure commodi, ipsum cupiditate enim voluptatibus fuga recusandae. Animi, quisquam.
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem nam nisi dicta voluptas laudantium aspernatur alias vel accusamus ad dolorum iure commodi, ipsum cupiditate enim voluptatibus fuga recusandae. Animi, quisquam.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="p-3 shadow col-sm bg-white">
        <div class="drop1 dropdown">
          <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
            ...
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Editar</a></li>
            <li><a class="dropdown-item" href="#">Eliminar</a></li>
          </ul>
        </div>
        <h4>Requerimientos</h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem nam nisi dicta voluptas laudantium aspernatur alias vel accusamus ad dolorum iure commodi, ipsum cupiditate enim voluptatibus fuga recusandae. Animi, quisquam.
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem nam nisi dicta voluptas laudantium aspernatur alias vel accusamus ad dolorum iure commodi, ipsum cupiditate enim voluptatibus fuga recusandae. Animi, quisquam.
        </p>
      </div>
      <div class="p-3 shadow col-sm bg-white">
        <div class="drop2 dropdown">
          <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
            ...
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Editar</a></li>
            <li><a class="dropdown-item" href="#">Eliminar</a></li>
          </ul>
        </div>
        <h4>Tareas</h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem nam nisi dicta voluptas laudantium aspernatur alias vel accusamus ad dolorum iure commodi, ipsum cupiditate enim voluptatibus fuga recusandae. Animi, quisquam.
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem nam nisi dicta voluptas laudantium aspernatur alias vel accusamus ad dolorum iure commodi, ipsum cupiditate enim voluptatibus fuga recusandae. Animi, quisquam.
        </p>
      </div>
      </div>
    </div>
  </div>
  <div class="abajo mb-0 p-3 bg-secondary text-white text-center">
    <p>© Derechos Reservados 2023 WebApp Notas</p>
  </div>
</body>
</html>