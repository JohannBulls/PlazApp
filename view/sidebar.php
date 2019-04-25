<div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#Login">
              <i class="nav-icon far fa-user-circle"></i> Perfil
            </a>
            <li class="nav-title"></li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="nav-icon fas fa-home"></i> Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view/Premire/Reseta.php">
              <i class="nav-icon fas fa-book"></i> Reseta</a>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link " data-toggle="modal" data-target="#Login">
              <i class="nav-icon fas fa-bicycle"></i> Domiciliario</a>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link " href="view/Premire/Info.php">
              <i class="nav-icon fas fa-info-circle"></i> Informacion</a>
          </li>
        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>


<!-- Modal -->
<div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="LoginTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="LoginTitle">Iniciar secion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="view/Free/index.php" method="post">
            <div class="form-group">
              <label for="Usuario">Usuario </label>
              <input type="mail" id="Usuario" class="form-control" placeholder="Usuario" required />
            </div>
            <div class="form-group">
                <label for="password">Contraseña </label>
                <input type="password" id="password" class="form-control" placeholder="*********" required />
              </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#Registar">Registrarse</button>
          <button type="submit" class="btn btn-success">Iniciar secion</button>
        </div>
        </form>
      </div>
    </div>
  </div>