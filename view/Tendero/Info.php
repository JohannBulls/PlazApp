<!DOCTYPE html>
<!--
* @version v1.0
* Plazapp
* Copyright (c) 2018
* Licensed under MIT (https://github.com/JohannBulls)
-->
<html lang="es">
<?php
include '../../controller/head_1.php'; ?>
<title>PLazapp</title>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <?php
    include '../../controller/header_1.php'; ?>
    <div class="app-body">
    <?php
        include '../../controller/sidebar_2.php'; ?>
                <main class="main">
            <div class="col-12 d-flex justify-content-center text-center p-5">
                <img src="./../../assets/img/brand/logo.png" alt="logo plazapp" width="50%" height="40%" />
            </div>
            <div class="container p-3">
                <div class="row ">
                    <div class="justify-content-center col-md-3 ml-md-auto p-3">
                        <h3>PlazApp te escucha</h3>
                        <p>Siempre hay una oportunidad para mejorar la calidad de nuestro servicio y la calidad de nuestra relación con nuestros usuarios,
                            con la excelencia que se merecen.</p>
                        <p>Por esta opción usted podrá registrar su petición, queja o reclamo alusivo a su servicio celular para lo cual se ha dispuesto
                            el siguiente formato para su diligenciamiento. Señor usuario, registre aquí única y exclusivamente PQR´s relacionadas al servicio
                            prestado.</p>
                    </div>
                    <div class="col-md-8 p-4">
                        <form action="" method="post">
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
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Telefono">Telefono</label>
                                    <input type="number" id="Telefono" class="form-control text-capitalize" placeholder="Telefono" required />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Correo">Correo </label>
                                    <input type="email" id="Correo" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Example@mail.com" required />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="Telefono">Asunto</label>
                                    <input type="text" id="Telefono" class="form-control text-capitalize" placeholder="Asunto" required />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="Correo">Mensaje</label>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                </div>
                            </div>
                            <div> <button type="submit" class="btn btn-success">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php
    include '../../controller/footer_1.php'; ?>
</body>

</html>