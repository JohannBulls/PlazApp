<!DOCTYPE html>
<!--
* @version v1.0
* Plazapp
* Copyright (c) 2018
* Licensed under MIT (https://github.com/JohannBulls)
-->
<html lang="es">
<?php
include 'view/head.php'; ?>
<title>PLazapp</title>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  <?php
  include 'view/header.php'; ?>
  <div class="app-body">
    <?php
    include 'view/sidebar.php'; ?>
    <main class="main">
      <div class="col-12 d-flex justify-content-center text-center p-5 ">
        <img src="assets/img/brand/logo.png" alt="logo plazapp" width="50%" height="40%" />
      </div>
      <div class="d-flex justify-content-center text-center p-2">
        <div class="col-6 d-flex">
          <input type="text" class="form-control" placeholder="Buscar Producto" aria-label="Recipient's username" aria-describedby="button-addon2" />
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center pt-4">
        <h1 class="text-danger">¡Ofertas!</h1>
      </div>
      <div class="container-fluid justify-content-center">
        <div class="row">
          <div class="col-sm-6 col-md p-3">
            <img src="assets/img/productos/1.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Registar" />
          </div>
          <div class="col-sm-6 col-md p-3">
            <img src="assets/img/productos/2.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Registar" />
          </div>
          <div class="col-sm-6 col-md p-3">
            <img src="assets/img/productos/3.png" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Registar" />
          </div>
          <div class="col-sm-6 col-md p-3">
            <img src="assets/img/productos/4.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Registar" />
          </div>
        </div>
      </div>
      <div class="container-fluid justify-content-center">
        <div class="row">
          <div class="col-sm-6 col-md p-3">
            <img src="assets/img/productos/5.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Registar" />
          </div>
          <div class="col-sm-6 col-md p-3">
            <img src="assets/img/productos/6.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Registar" />
          </div>
          <div class="col-sm-6 col-md p-3">
            <img src="assets/img/productos/7.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Registar" />
          </div>
          <div class="col-sm-6 col-md p-3">
            <img src="assets/img/productos/8.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Registar" />
          </div>
        </div>
      </div>
      <div class="container-fluid justify-content-center">
        <div class="row">
          <div class="col-sm-6 col-md p-3">
            <img src="assets/img/productos/9.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Registar" />
          </div>
          <div class="col-sm-6 col-md p-3">
            <img src="assets/img/productos/10.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Registar" />
          </div>
          <div class="col-sm-6 col-md p-3">
            <img src="assets/img/productos/11.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Registar" />
          </div>
          <div class="col-sm-6 col-md p-3">
            <img src="assets/img/productos/12.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Registar" />
          </div>
        </div>
      </div>
      <div class="container-fluid justify-content-center">
        <div class="row">
          <div class="col-sm-6 col-md p-3">
            <img src="assets/img/productos/13.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Registar" />
          </div>
          <div class="col-sm-6 col-md p-3">
            <img src="assets/img/productos/14.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Registar" />
          </div>
          <div class="col-sm-6 col-md p-3">
            <img src="assets/img/productos/15.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Registar" />
          </div>
          <div class="col-sm-6 col-md p-3">
            <img src="assets/img/productos/16.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Registar" />
          </div>
        </div>
      </div>
    </main>
  </div>
  <?php
  include 'view/footer.php'; ?>
</body>

</html>

<!-- Modal -->
<div class="modal fade" id="Registar" tabindex="-1" role="dialog" aria-labelledby="RegistarTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="RegistarTitle">Crea tu cuenta</h5>
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