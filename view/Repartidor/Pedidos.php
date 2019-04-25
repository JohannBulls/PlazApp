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
        include '../../controller/sidebar_1.php'; ?>
        <main class="main">
            <div class="col-12 d-flex justify-content-center text-center p-5">
                <img src="./../../assets/img/brand/logo.png" alt="logo plazapp" width="50%" height="40%" />
            </div>
            <div class="container p-3">
                <div class="row ">
                    <div class="justify-content-center col-md-3 ml-md-auto p-3">
                        <table>
                            <tr>
                                <td>
                                    <h4>Buscar nuevo pedido</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-primary" type="button" disabled>
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        Loading...
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Hoy</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>$ 16.500</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Último Viaje</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>$ 6.500</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Esta Semana</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>$ 65.000</h6>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-8 p-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.4785959734554!2d-74.0914584811043!3d4.686575044608699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b17fabea57d%3A0xff01ff5d23107798!2sPlaza+De+Mercado+Las+Ferias!5e0!3m2!1sen!2sco!4v1556164813403!5m2!1sen!2sco" width="100%" height="200%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php
    include '../../controller/footer_1.php'; ?>
</body>

</html>