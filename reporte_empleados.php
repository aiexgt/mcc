<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="img/logo/logo.ico">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MCC | Reporte Empleados</title>
  <?php include('./components/header.php') ?>
</head>

<body id="body-pd">
  <div id="menu">
    <header class="header" id="header">
      <div class="header_toggle">
        <i class="bx bx-menu" id="header-toggle"></i>
      </div>
      <b>
        <p id="busuario"></p>
      </b>
    </header>
    <div class="l-navbar" id="nav-bar">
      <nav class="nav">
        <div>
          <a href="#" class="nav_logo">
            <img src="img/logo/logo50x50.png" class="logo-icon" alt="">
            <span class="nav_logo-name">MCC</span>
          </a>
          <div class="nav_list">
            <a href="dashboard.php" class="nav_link">
              <i class="bx bx-grid-alt nav_icon"></i>
              <span class="nav_name">Panel Principal</span>
            </a>
            <a href="rrhh.php" class="nav_link">
              <i class="bx bx-user nav_icon"></i>
              <span class="nav_name">Recursos Humanos</span>
            </a>
            <a href="importaciones.php" class="nav_link">
              <i class="bx bx-message-square-detail nav_icon"></i>
              <span class="nav_name">Importaciones</span>
            </a>
            <a href="cooperativa.php" class="nav_link">
              <i class="bx bx-bookmark nav_icon"></i>
              <span class="nav_name">Cooperativa</span>
            </a>
            <a href="administracion.php" class="nav_link active">
              <i class="bx bx-folder nav_icon"></i>
              <span class="nav_name">Administración</span>
            </a>
            <a href="ayuda.php" class="nav_link">
              <i class="bx bx-bar-chart-alt-2 nav_icon"></i>
              <span class="nav_name">Soporte</span>
            </a>
          </div>
        </div>
        <a href="index.php" class="nav_link">
          <i class="bx bx-log-out nav_icon"></i>
          <span class="nav_name">Cerrar Sesión</span>
        </a>
      </nav>
    </div>
  </div>
  <!--Container Main start-->

  <div class="row">
    <div class="col-sm-8">
      <div class="input-group flex-nowrap">
        <input id="pfecha" type="date" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" />
        <span class="input-group-text" id="basic-addon2"> - </span>
        <input id="sfecha" type="date" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" />
      </div>
    </div>
    <div class="col-sm-2">
      <div class="input-group flex-nowrap">
        <button type="button" id="btn-nuevo" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Nuevo Reporte
        </button>
      </div>
    </div>
  </div>
  <br />
  <div id="tabla-contenido"></div>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header hblue">
          <h5 class="modal-title" id="exampleModalLabel">
            Registro de Reporte
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5>Información Empleado</h5>
          <hr>
          <div class="row">
            <div class="col-sm-12">
              <label for="" class="form-label is-required">Empresa</label>
              <select class="form-select" id="empresa" aria-label="Default select example">
              </select>
              <br>
            </div>
          </div>
          <br>
          <h5>Fechas</h5>
          <hr>
          <div class="row">
            <div class="col-sm-12">
              <label for="" class="form-label is-required">Fecha Inicio</label>
              <input type="date" class="form-control" placeholder="Nombre" id="fechaInicio" aria-label="Nombre" />
              <br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <label for="" class="form-label is-required">Fecha Fin</label>
              <input type="date" class="form-control" placeholder="Nombre" id="fechaFin" aria-label="Nombre" />
              <br>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Cerrar
          </button>
          <button type="button" id="btn-guardar" class="btn btn-primary">
            Guardar
          </button>
        </div>
      </div>
    </div>
  </div>
  <?php include('./components/footer.php') ?>
  <script type="text/javascript" src="./src/reporte_empleados/script.js"></script>
</body>

</html>