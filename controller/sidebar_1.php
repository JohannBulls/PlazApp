<div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link "  data-toggle="modal" data-target="#Perfil">
              <i class="nav-icon far fa-user-circle"></i> Perfil
            </a>
            <li class="nav-title"></li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./../../index.php">
              <i class="nav-icon fas fa-home"></i> Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./../../view/Free/Reseta.php">
              <i class="nav-icon fas fa-book"></i> Reseta</a>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link " href="./../../view/Repartidor/Repartidor.php">
              <i class="nav-icon fas fa-bicycle"></i> Domiciliario</a>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link " href="./../../view/Free/info.php">
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
        <h5 class="modal-title" id="PerfilTitle">Crea tu cuenta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="d-flex justify-content-center p-4">
          <i class="fas fa-user fa-8x"></i></div>
        <form action="https://www.google.com/search?q=traductor&oq=tr&aqs=chrome.0.69i59j69i61j69i60l3j69i57.813j0j9&sourceid=chrome&ie=UTF-8" method="post">
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
            <input type="mail" id="Correo" class="form-control" placeholder="Example@mail.com" required />
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Telefono">Telefono</label>
              <input type="number" id="Telefono" class="form-control text-capitalize" placeholder="Telefono" required />
            </div>
            <div class="form-group col-md-6">
              <label for="Barrio">Barrio</label>
              <input type="text" id="Barrio" class="form-control text-capitalize" placeholder="Barrio" required />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Contraseña">Contraseña</label>
              <input type="password" id="password" class="form-control " placeholder="********" required /></div>
            <div class="form-group col-md-6">
              <label for="Fecha">Fecha de nacimiento </label>
              <input type="date" id="Fecha" class="form-control " required />
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