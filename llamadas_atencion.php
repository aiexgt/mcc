<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="img/logo/logo.ico">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MCC | Llamadas de Atención</title>
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="assets/imported/menu/menuStyle.css"
      type="text/css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body id="body-pd">
    <div id="menu">
      <header class="header" id="header">
        <div class="header_toggle">
          <i class="bx bx-menu" id="header-toggle"></i>
        </div>
        <b><p id="busuario"></p></b>
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
      <div class="col-sm-6">
        <div class="input-group flex-nowrap">
          <input
            id="busqueda"
            type="text"
            class="form-control"
            placeholder="Buscar Vacacion"
            aria-label="Recipient's username"
            aria-describedby="basic-addon2"
          />
          <span class="input-group-text" id="basic-addon2">Buscar</span>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="input-group flex-nowrap">
          <button
            type="button"
            id="btn-nuevo"
            class="btn btn-success"
            data-bs-toggle="modal"
            data-bs-target="#exampleModal"
          >
            Nueva Llamada de Atención
          </button>
        </div>
      </div>
    </div>
    <br />
    <div id="tabla-contenido"></div>

    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    ><div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header hblue">
          <h5 class="modal-title" id="exampleModalLabel">
            Registro de Llamadas de Atención
          </h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6">
              <label for="" class="form-label is-required">Empresa</label>
              <select
                class="form-select"
                id="empresa"
                aria-label="Default select example"
              > 
              </select> <br>
            </div>
            <div class="col-sm-6">
              <label for="" class="form-label is-required">Trabajador</label>
              <select
                class="form-select"
                id="trabajador"
                aria-label="Default select example"
                disabled
              > 
              </select> <br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label for="" class="form-label is-required">Fecha</label>
              <input
                type="date"
                class="form-control"
                placeholder="Nombre"
                id="fecha"
                aria-label="Nombre"
              />
              <br>
            </div>
            <div class="col-sm-6">
              <form
                id="uploadimage"
                action=""
                method="post"
                enctype="multipart/form-data"
              >
                <label for="formFile" class="form-label is-required">Comprobante</label>
                <input
                  class="form-control"
                  type="file"
                  id="image"
                  accept="application/pdf"
                />
              </form>
              <br />
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <label for="" class="form-label is-required">Asunto</label>
              <input
                type="text"
                class="form-control"
                placeholder="Asunto"
                id="asunto"
                aria-label="Asunto"
                maxlength="100"
              />
              <br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <label for="exampleFormControlTextarea1" class="form-label">Observaciones</label>
              <textarea class="form-control" id="observaciones" rows="3" maxlength="300"></textarea>
              <br />
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            Cerrar
          </button>
          <button type="button" id="btn-guardar" class="btn btn-primary">
            Guardar
          </button>
        </div>
      </div>
    </div></div>

    <div
      class="modal fade"
      id="exampleModala"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    ><div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header hblue">
          <h5 class="modal-title" id="exampleModalLabel">
            Ver Información
          </h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6">
              <label for="" class="form-label is-required">Trabajador</label>
              <input
                type="text"
                class="form-control"
                placeholder="Trabajador"
                id="utrabajador"
                aria-label="Nombre"
              /> <br>
            </div>

          </div>
          <div class="row">
            <div class="col-sm-6">
              <label for="" class="form-label is-required">Fecha</label>
              <input
                type="date"
                class="form-control"
                placeholder="Nombre"
                id="ufecha"
                aria-label="Nombre"
              />
              <br>
            </div>
            <div class="col-sm-6">
              <label for="" class="form-label is-required">Comprobante</label><br>
              <button class="btn btn-success" id="verComprobante">Ver</button>
              <br />
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <label for="" class="form-label is-required">Asunto</label>
              <input
                type="text"
                class="form-control"
                placeholder="Asunto"
                id="uasunto"
                aria-label="Asunto"
                maxlength="100"
              />
              <br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <label for="exampleFormControlTextarea1" class="form-label">Observaciones</label>
              <textarea class="form-control" id="uobservaciones" maxlength="300" rows="3"></textarea>
              <br />
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            Cerrar
          </button>
          <button type="button" id="btn-editar" class="btn btn-success">
            Editar
          </button>
          <button type="button" id="btn-actualizar" class="btn btn-primary">
            Actualizar
          </button>
        </div>
      </div>
    </div></div>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">
          <p>Copyright &copy; | Tubagua 2022</p>
        </span>
      </div>
    </footer>
    <!-- Scripts -->
    <script src="assets/imported/jquery/jquery.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"
      integrity="sha256-/H4YS+7aYb9kJ5OKhFYPUjSJdrtV6AeyJOtTkw6X72o="
      crossorigin="anonymous"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    ></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Scripts Propios -->
    <script
      type="text/javascript"
      src="assets/imported/menu/menuScript.js"
    ></script>
    <script type="text/javascript" src="assets/js/llamadas_atencion/script.js"></script>
  </body>
</html>