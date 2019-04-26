<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link " data-toggle="modal" data-target="#Perfil3">
                    <i class="nav-icon far fa-user-circle"></i> Felipe
                </a>
            <li class="nav-title"></li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Tendero/index.php">
                    <i class="nav-icon fas fa-home"></i> Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Tendero/Promocionar.php">
                    <i class="nav-icon fas fa-book"></i> Promocionar</a>
                </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link " href="../Tendero/Info.php">
                    <i class="nav-icon fas fa-info-circle"></i> Informacion</a>
            </li>

        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>

<!-- Modal -->
<div class="modal fade" id="Perfil3" tabindex="-1" role="dialog" aria-labelledby="Perfil3Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Perfil31Title">Cuenta</h5>
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
                                <input type="text" id="Nombre" class="form-control text-capitalize" placeholder="Nombre" value="Felipe" required />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Apellido">Apellido </label>
                                <input type="text" id="Apellido" class="form-control text-capitalize" placeholder="Apellido" value="Gonzales Rojas" required />
                            </div>
                        </div>
                        <label for="Correo">Correo </label>
                        <input type="email" id="Correo" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Example@mail.com" value="Feliperojas@gmail.com" required />
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Telefono">Telefono</label>
                            <input type="number" id="Telefono" class="form-control text-capitalize" placeholder="Telefono" value="25198753" required />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Puesto">Puesto</label>
                            <input type="text" id="Puesto" class="form-control text-capitalize" placeholder="Puesto" value="23" required />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Contraseña">Contraseña</label>
                            <input type="password" id="password" class="form-control " placeholder="********" required value="********"/></div>
                        <div class="form-group col-md-6">
                            <label for="Establecimiento">Establecimiento</label><div><input type="file">
                            <img src="./../../assets/img/productos/p1.jpg" width="70%" height="100%"></div>
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