<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Notas Web</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
  <div class="page-content container note-has-grid">
    <ul class="nav nav-pills p-3 bg-white mb-3 align-items-center mt-5 shadow">
      <li class="nav-item">
        <a href="javascript:void(0)"
          class="nav-link note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2 active"
          id="all-category">
          <i class="icon-layers mr-1"></i><span class="d-none d-md-block">Todas las notas</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="javascript:void(0)"
          class="nav-link note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2"
          id="note-business"> <i class="icon-briefcase mr-1"></i><span class="d-none d-md-block">Negocios</span></a>
      </li>
      <li class="nav-item">
        <a href="javascript:void(0)"
          class="nav-link note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-social">
          <i class="icon-share-alt mr-1"></i><span class="d-none d-md-block">Social</span></a>
      </li>
      <li class="nav-item">
        <a href="javascript:void(0)"
          class="nav-link note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2"
          id="note-important"> <i class="icon-tag mr-1"></i><span class="d-none d-md-block">Importante</span></a>
      </li>
      <li class="nav-item ml-auto">
        <a href="javascript:void(0)" class="nav-link btn-dark d-flex align-items-center px-3"
          id="add-notes"> <i class="icon-note m-1"></i><span class="d-none d-md-block font-14">Agregar nota</span></a>
      </li>
    </ul>
    <div class="position-absolute">
      <div id="loader"></div>
    </div>
    <div id="resultados_ajax"></div>
    <div class="tab-content bg-transparent">

    </div>
    <form name="guardar_nota" id="guardar_nota" method="post">
      <!-- Modal Add notes -->
      <div class="modal fade" id="addnotesmodal" tabindex="-1" role="dialog" aria-labelledby="addnotesmodalTitle"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content border-0">
            <div class="modal-header x text-white">
              <h5 class="modal-title text-white">Agregar nota</h5>
              <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="notes-box">
                <div class="notes-content">

                  <div class="row">
                    <div class="col-md-12 mb-3">
                      <div class="note-title">
                        <label>Título</label>
                        <input type="text" id="note-has-title" name="note-has-title" class="form-control" minlength="10"
                          placeholder="Título" required />
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="note-description">
                        <label>Descripción</label>
                        <textarea id="note-has-description" name="note-has-description" class="form-control"
                          minlength="30" placeholder="Descripción" required rows="3"></textarea>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="modal-footer">

              <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <button id="btn-n-add" class="btn x" type="submit">Guardar</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="abajo mb-0 p-3 bg-secondary text-white text-center">
    <p>© Derechos Reservados 2023 WebApp Notas</p>
  </div>

  <script type="text/javascript" src="./js/app.js"></script>
</body>

</html>