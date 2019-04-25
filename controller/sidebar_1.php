<div class="sidebar">
  <nav class="sidebar-nav">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link " data-toggle="modal" data-target="#Perfil">
          <i class="nav-icon far fa-user-circle"></i> Johann
        </a>
      <li class="nav-title"></li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="nav-icon fas fa-home"></i> Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Premire/Reseta.php">
          <i class="nav-icon fas fa-book"></i> Reseta</a>
      </li>
      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">
          <i class="nav-icon fas fa-bicycle"></i> Domiciliario</a>
        <ul class="nav-dropdown-items">
          <li class="nav-item">
            <a class="nav-link" href="../Repartidor/Pedidos.php">
              <i class="nav-icon icon-note"></i>Pedidos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Repartidor/Historial.php">
              <i class="nav-icon fas fa-history"></i> Historial
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item nav-dropdown">
        <a class="nav-link " href="../Premire/Info.php">
          <i class="nav-icon fas fa-info-circle"></i> Informacion</a>
      </li>

    </ul>
  </nav>
  <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>

<!-- Modal -->
<div class="modal fade" id="Perfil" tabindex="-1" role="dialog" aria-labelledby="PerfilTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="PerfilTitle">Cuenta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="d-flex justify-content-center p-4">
          <i class="fas fa-user fa-8x"></i></div>
        <form action="index.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Nombre </label>
                <input type="text" id="Nombre" class="form-control text-capitalize" value="Johann" required />
              </div>
              <div class="form-group col-md-6">
                <label for="Apellido">Apellidos </label>
                <input type="text" id="Apellido" class="form-control text-capitalize" value="Amaya lopez" required />
              </div>
            </div>
            <label for="Correo">Correo </label>
            <input type="mail" id="Correo" class="form-control" value="Johannpez99@gmail.com" required />
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Telefono">Telefono</label>
              <input type="number" id="Telefono" class="form-control text-capitalize" value="3222799262" required />
            </div>
            <div class="form-group col-md-6">
              <label for="Barrio">Barrio</label>
              <input type="text" id="Barrio" class="form-control text-capitalize" value="Bonanza" required />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Contraseña">Contraseña</label>
              <input type="password" id="password" class="form-control " value="********" required /></div>
            <div class="form-group col-md-6">
              <label for="Fecha">Fecha de nacimiento </label>
              <input type="date" id="Fecha" class="form-control" placeholder="11-14-1999" />
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <a href="../../index.php"><button type="button" class="btn btn-outline-danger">Cerrar sesion</button></a>
        <button type="submit" class="btn btn-success">Actualizar</button>
      </div>
      </form>
    </div>
  </div>
</div>