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
                <form class="needs-validation" novalidate>
                    <h4>Direccion de Origen</h4>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Nombre</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre" required>
                            <div class="valid-feedback">
                                ¡Luce bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor, Dijite su nombre.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Direccion 1</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Direccion" required>
                            <div class="valid-feedback">
                                ¡Luce bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor, Dijite su Direccion 1.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Direccion 2</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Direccion">
                            <div class="valid-feedback">
                                ¡Luce bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor, Dijite su Direccion 2.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="">Ciudad</label>
                            <input type="text" class="form-control" placeholder="Ciudad" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationCustom05">Codigo Postal</label>
                            <input type="text" class="form-control" id="validationCustom05" placeholder="Codigo postal" required>
                            <div class="valid-feedback">
                                ¡Luce bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor, Dijite su Codigo postal.
                            </div>
                        </div>
                    </div>
                    <h4>Informacion de la Tarjeta</h4>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Numero Tarjeta</label>
                            <input type="number" class="form-control" id="validationCustom01" placeholder="Numero Tarjeta" required>
                            <div class="valid-feedback">
                                ¡Luce bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor, Dijite el numero de la tarjeta.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">CVV</label>
                            <input type="number" class="form-control" id="validationCustom02" placeholder="CVV" required>
                            <div class="valid-feedback">
                                ¡Luce bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor, CVV de la tarjeta.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label>Mes</label>
                            <select class="custom-select" id="inputGroupSelect01" require>
                                <option value="">Mes</option>
                                <option >01</option>
                                <option >02</option>
                                <option >03</option>
                                <option >04</option>
                                <option >05</option>
                                <option >06</option>
                                <option >07</option>
                                <option >08</option>
                                <option >09</option>
                                <option >10</option>
                                <option >11</option>
                                <option >12</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Año</label>
                            <select class="custom-select" id="inputGroupSelect01" require>
                                <option value="">Mes</option>
                                <option >2019</option>
                                <option >2020</option>
                                <option >2021</option>
                                <option >2022</option>
                                <option >2023</option>
                                <option >2024</option>
                                <option >2025</option>
                                <option >2026</option>
                                <option >2027</option>
                                <option >2028</option>
                                <option >2029</option>
                                <option >2030</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </form>

                <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                </script>
            </div>
        </main>
    </div>
    <?php
    include '../../controller/footer_1.php'; ?>
</body>

</html>