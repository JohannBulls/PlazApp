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
            <a class="nav-link " data-toggle="modal" data-target="#Login1">
              <i class="nav-icon fas fa-balance-scale"></i> Tendero</a>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link " href="view/Premire/Info.php">
              <i class="nav-icon fas fa-info-circle"></i> Informacion</a>
          </li>
        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>


<!-- Modal 1-->
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
          <form action="view/Repartidor/Pedidos.php" method="post">
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

  <!-- Modal 2-->
<div class="modal fade" id="Login1" tabindex="-1" role="dialog" aria-labelledby="Login1Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="Login1Title">Iniciar secion </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="view/Tendero/index.php" method="post">
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
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#Registar1">Registrarse</button>
          <button type="submit" class="btn btn-success">Iniciar secion</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal 3-->
<div class="modal fade" id="Registar1" tabindex="-1" role="dialog" aria-labelledby="Registar1Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Registar1Title">Crea tu cuenta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="d-flex justify-content-center p-4">
          <i class="fas fa-user fa-8x"></i></div>
        <form action="view/Free/index.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Nombre </label>
                <input type="text" id="Nombre" class="form-control text-capitalize" placeholder="Nombre" required />
              </div>
              <div class="form-group col-md-6">
                <label for="Apellido">Apellido </label>
                <input type="text" id="Apellido" class="form-control text-capitalize" placeholder="Apellido" required />
              </div>
            </div>
            <label for="Correo">Correo </label>
            <input type="email" id="Correo" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Example@mail.com" required />
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Telefono">Telefono</label>
              <input type="number" id="Telefono" class="form-control text-capitalize" placeholder="Telefono" required />
            </div>
            <div class="form-group col-md-6">
              <label for="Puesto">Puesto</label>
              <input type="text" id="Puesto" class="form-control text-capitalize" placeholder="Puesto" required />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Contraseña">Contraseña</label>
              <input type="password" id="password" class="form-control " placeholder="********" required /></div>
            <div class="form-group col-md-6">
              <label for="Establecimiento">Establecimiento</label>
              <input  type="file" id="Establecimiento" class="form-control " required />
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Registrarte</button>
      </div>
      </form>
    </div>
  </div>
</div>