<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="img/logo/logo.ico">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MCC | Inicio</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="assets/imported/menu/menuStyle.css"
      type="text/css"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body id="body-pd">
    <header class="header" id="header">
      <div class="header_toggle">
        <i class="bx bx-menu" id="header-toggle"></i>
      </div>
      <div class="header_img">
        <img src="img/profile/hczKIze.jpg" alt="" />
      </div>
    </header>
    <div class="l-navbar" id="nav-bar">
      <nav class="nav">
        <div>
          <a href="#" class="nav_logo">
            <img src="img/logo/logo50x50.png" class="logo-icon" alt="">
            <span class="nav_logo-name">MCC</span>
          </a>
          <div class="nav_list">
            <a href="dashboard.php" class="nav_link active">
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
            <a href="administracion.php" class="nav_link">
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
    <div>
      <div class="row text-center">
        <div class="col-sm-4">
          <div class="card text-white bg-success mb-3">
            <div class="card-header">Notificación</div>
            <div class="card-body">
              <h5 class="card-title">Descripción de la notificación</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-light btn-outline-dark"
                >Marcar como Leido</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card text-white bg-warning mb-3">
            <div class="card-header">Recordatorio</div>
            <div class="card-body">
              <h5 class="card-title">Descripción del Recordatorio</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-light btn-outline-dark"
                >Marcar como Leido</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card text-white bg-danger mb-3">
            <div class="card-header">Alerta</div>
            <div class="card-body">
              <h5 class="card-title">Descripción de la alerta</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-light btn-outline-dark"
                >Marcar como Leido</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container"> <span class="text-muted">
          <p>Copyright &copy; | Tubagua 2022</p>
          </span> 
      </div>
    </footer>
    <!-- Scripts -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"
      integrity="sha256-/H4YS+7aYb9kJ5OKhFYPUjSJdrtV6AeyJOtTkw6X72o="
      crossorigin="anonymous"
    ></script>
    <script src="assets/imported/jquery/jquery.min.js"></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    ></script>

    <!-- Scripts Propios -->
    <script type="text/javascript" src="assets/imported/menu/menuScript.js"></script>
  </body>
</html>