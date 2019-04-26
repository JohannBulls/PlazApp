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
                        <img src="./../../assets/img/productos/1.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Producto1" />
                    </div>
                    <div class="col-sm-6 col-md p-3">
                        <img src="./../../assets/img/productos/2.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Producto2" />
                    </div>
                    <div class="col-sm-6 col-md p-3">
                        <img src="./../../assets/img/productos/3.png" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Producto3" />
                    </div>
                    <div class="col-sm-6 col-md p-3">
                        <img src="./../../assets/img/productos/4.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Producto4" />
                    </div>
                </div>
            </div>
            <div class="container-fluid justify-content-center">
                <div class="row">
                    <div class="col-sm-6 col-md p-3">
                        <img src="./../../assets/img/productos/5.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Producto5" />
                    </div>
                    <div class="col-sm-6 col-md p-3">
                        <img src="./../../assets/img/productos/6.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Producto6" />
                    </div>
                    <div class="col-sm-6 col-md p-3">
                        <img src="./../../assets/img/productos/7.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Producto7" />
                    </div>
                    <div class="col-sm-6 col-md p-3">
                        <img src="./../../assets/img/productos/8.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Producto8" />
                    </div>
                </div>
            </div>
            <div class="container-fluid justify-content-center">
                <div class="row">
                    <div class="col-sm-6 col-md p-3">
                        <img src="./../../assets/img/productos/9.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Producto9" />
                    </div>
                    <div class="col-sm-6 col-md p-3">
                        <img src="./../../assets/img/productos/10.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Producto10" />
                    </div>
                    <div class="col-sm-6 col-md p-3">
                        <img src="./../../assets/img/productos/11.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Producto11" />
                    </div>
                    <div class="col-sm-6 col-md p-3">
                        <img src="./../../assets/img/productos/12.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Producto12" />
                    </div>
                </div>
            </div>
            <div class="container-fluid justify-content-center">
                <div class="row">
                    <div class="col-sm-6 col-md p-3">
                        <img src="./../../assets/img/productos/13.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Producto13" />
                    </div>
                    <div class="col-sm-6 col-md p-3">
                        <img src="./../../assets/img/productos/14.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Producto14" />
                    </div>
                    <div class="col-sm-6 col-md p-3">
                        <img src="./../../assets/img/productos/15.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Producto15" />
                    </div>
                    <div class="col-sm-6 col-md p-3">
                        <img src="./../../assets/img/productos/16.jpg" alt="Cebolla Larga" width="90%" class="rounded-lg" data-toggle="modal" data-target="#Producto16" />
                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php
    include '../../controller/footer_1.php'; ?>
</body>

</html>

<!-- Modal 1-->
<div class="modal fade" id="Producto1" tabindex="-1" role="dialog" aria-labelledby="Producto1Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Producto1Title">Manzana verde</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-md-6"><img src="./../../assets/img/productos/1.jpg" alt="" width="100%" class="rounded-lg" /></div>
                        <div class="col-md-6">
                            <table class="table justify-content-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Manzana verde</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Puesto</th>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Unidad</th>
                                        <td>Kilo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Oferta</th>
                                        <td>1.430</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Normal</th>
                                        <td>1.500</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 2-->

<div class="modal fade" id="Producto2" tabindex="-1" role="dialog" aria-labelledby="Producto2Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Producto2Title">Pollo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-md-6"><img src="./../../assets/img/productos/2.jpg" alt="" width="100%" class="rounded-lg" /></div>
                        <div class="col-md-6">
                            <table class="table justify-content-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Pollo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Puesto</th>
                                        <td>50</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Unidad</th>
                                        <td>Kilo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Oferta</th>
                                        <td>19.200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Normal</th>
                                        <td>20.210</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 3-->

<div class="modal fade" id="Producto3" tabindex="-1" role="dialog" aria-labelledby="Producto3Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Producto3Title">Papa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-md-6"><img src="./../../assets/img/productos/3.png" alt="" width="100%" class="rounded-lg" /></div>
                        <div class="col-md-6">
                            <table class="table justify-content-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Papa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Puesto</th>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Unidad</th>
                                        <td>Libra</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Oferta</th>
                                        <td>2.190</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Normal</th>
                                        <td>2.310</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 4-->

<div class="modal fade" id="Producto4" tabindex="-1" role="dialog" aria-labelledby="Producto4Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Producto4Title">Cebolla larga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-md-6"><img src="./../../assets/img/productos/4.jpg" alt="" width="100%" class="rounded-lg" /></div>
                        <div class="col-md-6">
                            <table class="table justify-content-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Cebolla larga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Puesto</th>
                                        <td>22</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Unidad</th>
                                        <td>Libra</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Oferta</th>
                                        <td>2.410</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Normal</th>
                                        <td>2.540</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 5-->

<div class="modal fade" id="Producto5" tabindex="-1" role="dialog" aria-labelledby="Producto5Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Producto5Title">Uva verde</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-md-6"><img src="./../../assets/img/productos/5.jpg" alt="" width="100%" class="rounded-lg" /></div>
                        <div class="col-md-6">
                            <table class="table justify-content-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Uva verde</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Puesto</th>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Unidad</th>
                                        <td>Libra</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Oferta</th>
                                        <td>3.180</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Normal</th>
                                        <td>3.360</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 6-->

<div class="modal fade" id="Producto6" tabindex="-1" role="dialog" aria-labelledby="Producto6Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Producto6Title">Berenjena</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-md-6"><img src="./../../assets/img/productos/6.jpg" alt="" width="100%" class="rounded-lg" /></div>
                        <div class="col-md-6">
                            <table class="table justify-content-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Berenjena </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Puesto</th>
                                        <td>13</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Unidad</th>
                                        <td>Kilo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Oferta</th>
                                        <td>1.300</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Normal</th>
                                        <td>1.500</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 7-->

<div class="modal fade" id="Producto7" tabindex="-1" role="dialog" aria-labelledby="Producto7Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Producto7Title">Fresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-md-6"><img src="./../../assets/img/productos/7.jpg" alt="" width="100%" class="rounded-lg" /></div>
                        <div class="col-md-6">
                            <table class="table justify-content-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Fresa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Puesto</th>
                                        <td>28</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Unidad</th>
                                        <td>Kilo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Oferta</th>
                                        <td>5.500</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Normal</th>
                                        <td>5.800</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 8-->

<div class="modal fade" id="Producto8" tabindex="-1" role="dialog" aria-labelledby="Producto8Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Producto8Title">Huevo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-md-6"><img src="./../../assets/img/productos/8.jpg" alt="" width="100%" class="rounded-lg" /></div>
                        <div class="col-md-6">
                            <table class="table justify-content-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Huevo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Puesto</th>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Unidad</th>
                                        <td>Kilo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Oferta</th>
                                        <td>350</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Normal</th>
                                        <td>450</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 9-->

<div class="modal fade" id="Producto9" tabindex="-1" role="dialog" aria-labelledby="Producto9Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Producto9Title">Lechuga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-md-6"><img src="./../../assets/img/productos/9.jpg" alt="" width="100%" class="rounded-lg" /></div>
                        <div class="col-md-6">
                            <table class="table justify-content-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Lechuga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Puesto</th>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Unidad</th>
                                        <td>Kilo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Oferta</th>
                                        <td>18.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Normal</th>
                                        <td>18.500</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 10-->

<div class="modal fade" id="Producto10" tabindex="-1" role="dialog" aria-labelledby="Producto10Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Producto10Title">Cebolla Cabezona</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-md-6"><img src="./../../assets/img/productos/10.jpg" alt="" width="100%" class="rounded-lg" /></div>
                        <div class="col-md-6">
                            <table class="table justify-content-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Cebolla Cabezona</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Puesto</th>
                                        <td>21</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Unidad</th>
                                        <td>Kilo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Oferta</th>
                                        <td>7.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Normal</th>
                                        <td>7.200</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 11-->

<div class="modal fade" id="Producto11" tabindex="-1" role="dialog" aria-labelledby="Producto11Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Producto11Title">Manzana Roja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-md-6"><img src="./../../assets/img/productos/11.jpg" alt="" width="100%" class="rounded-lg" /></div>
                        <div class="col-md-6">
                            <table class="table justify-content-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Manzana Roja</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Puesto</th>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Unidad</th>
                                        <td>Kilo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Oferta</th>
                                        <td>2.800</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Normal</th>
                                        <td>3.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 12-->

<div class="modal fade" id="Producto12" tabindex="-1" role="dialog" aria-labelledby="Producto12Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Producto12Title">Uva Champa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-md-6"><img src="./../../assets/img/productos/12.jpg" alt="" width="100%" class="rounded-lg" /></div>
                        <div class="col-md-6">
                            <table class="table justify-content-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Uva Champa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Puesto</th>
                                        <td>9</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Unidad</th>
                                        <td>Kilo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Oferta</th>
                                        <td>20.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Normal</th>
                                        <td>22.560</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 13-->

<div class="modal fade" id="Producto13" tabindex="-1" role="dialog" aria-labelledby="Producto13Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Producto13Title">Repollo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-md-6"><img src="./../../assets/img/productos/13.jpg" alt="" width="100%" class="rounded-lg" /></div>
                        <div class="col-md-6">
                            <table class="table justify-content-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Repollo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Puesto</th>
                                        <td>14</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Unidad</th>
                                        <td>Kilo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Oferta</th>
                                        <td>15.600</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Normal</th>
                                        <td>17.500</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 14-->

<div class="modal fade" id="Producto14" tabindex="-1" role="dialog" aria-labelledby="Producto14Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Producto14Title">Calabaza</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-md-6"><img src="./../../assets/img/productos/14.jpg" alt="" width="100%" class="rounded-lg" /></div>
                        <div class="col-md-6">
                            <table class="table justify-content-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Calabaza</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Puesto</th>
                                        <td>28</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Unidad</th>
                                        <td>Kilo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Oferta</th>
                                        <td>1.500</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Normal</th>
                                        <td>1.900</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 15-->

<div class="modal fade" id="Producto15" tabindex="-1" role="dialog" aria-labelledby="Producto15Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Producto15Title">Zanahoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-md-6"><img src="./../../assets/img/productos/15.jpg" alt="" width="100%" class="rounded-lg" /></div>
                        <div class="col-md-6">
                            <table class="table justify-content-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Zanahoria</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Puesto</th>
                                        <td>26</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Unidad</th>
                                        <td>Kilo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Oferta</th>
                                        <td>26.890</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Normal</th>
                                        <td>29.940</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 16-->

<div class="modal fade" id="Producto16" tabindex="-1" role="dialog" aria-labelledby="Producto16Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Producto16Title">Pera</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-md-6"><img src="./../../assets/img/productos/16.jpg" alt="" width="100%" class="rounded-lg" /></div>
                        <div class="col-md-6">
                            <table class="table justify-content-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Pera</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Puesto</th>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Unidad</th>
                                        <td>Kilo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Oferta</th>
                                        <td>6.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Precio Normal</th>
                                        <td>6.580</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>