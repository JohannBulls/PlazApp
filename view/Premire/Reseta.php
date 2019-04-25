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
          <input type="text" class="form-control" placeholder="Buscar Reseta" aria-label="Recipient's username" aria-describedby="button-addon2" />
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="container p-4">
        <div class="row">
          <div class="col-md-3 pt-4" data-toggle="modal" data-target="#Receta1"><img src="../../assets/img/productos/a1.jpg" alt="" width="100%" class="rounded-lg" /></div>
          <div class="col-md-3" data-toggle="modal" data-target="#Receta1">
            <h1 class="text-primary">Pollo con verduras</h1>
            <h5>5 raciones</h5>
            arveja, coliflor, pimentón, pechuga mediana, cebolla cabezona, zanahoria, apio, ajo
          </div>
          <div class="col-md-3 pt-4" data-toggle="modal" data-target="#Receta2"><img src="../../assets/img/productos/a2.jpg" alt="" width="100%" class="rounded-lg" /></div>
          <div class="col-md-3" data-toggle="modal" data-target="#Receta2">
            <h1 class="text-primary">Ensalada Rápida</h1>
            <h5>2 raciones</h5>
            tomates (verde y rojo), aguacate, pepino cohombro, coliflor, limón
          </div>
        </div>
      </div>
      <div class="container p-4">
        <div class="row">
          <div class="col-md-3 pt-4" data-toggle="modal" data-target="#Receta3"><img src="../../assets/img/productos/a3.jpg" alt="" width="100%" class="rounded-lg" /></div>
          <div class="col-md-3" data-toggle="modal" data-target="#Receta3">
            <h1 class="text-primary">CAPELLINI🍝Al Hogao Colombiano, con Curry y Cilantro...!😋</h1>
            <h5>2 raciones</h5>
            pasta capellini, tomates, cebolla morada grande, pimentón rojo grande, pasta de ajo, grande de cilantro picadito, cdta. de polvos curry, cdta. de comino en polvo
          </div>
          <div class="col-md-3 pt-4" data-toggle="modal" data-target="#Receta4"><img src="../../assets/img/productos/a4.jpg" alt="" width="100%" class="rounded-lg" /></div>
          <div class="col-md-3" data-toggle="modal" data-target="#Receta4">
            <h1 class="text-primary">CEVICHE De🐬Merluza y Surimi🦀...!</h1>
            <h5>4 raciones</h5>
            pequeños de merluza, surimi, limones, su jugo, cdta. de pasta de ajo, cebolla morada grande, cilantro picado, cdta. de pimienta picante, aceite de oliva
          </div>
        </div>
      </div>
      <div class="container p-4">
        <div class="row">
          <div class="col-md-3 pt-4" data-toggle="modal" data-target="#Receta5"><img src="../../assets/img/productos/a5.jpg" alt="" width="100%" class="rounded-lg" /></div>
          <div class="col-md-3" data-toggle="modal" data-target="#Receta5">
            <h1 class="text-primary">Tilapia y ensalada de melón</h1>
            <h5>1 comensal</h5>
            tilapia, Melón, Ajo, Limón, Sal y pimienta, Orégano, Perejil (deshidratado preferiblemente), Pepino o en su defecto, calabacín verde(zucchini, zapallo italiano)
          </div>
          <div class="col-md-3 pt-4" data-toggle="modal" data-target="#Receta6"><img src="../../assets/img/productos/a6.jpg" alt="" width="100%" class="rounded-lg" /></div>
          <div class="col-md-3" data-toggle="modal" data-target="#Receta6">
            <h1 class="text-primary">FESTIVAL De Legumbres...!😋</h1>
            <h5>20 minutos</h5>
            guisantes verdes, garbanzos cocidos al dente, espárragos, aceite de oliva, pasta de ajo, Sal
          </div>
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
<div class="modal fade" id="Receta1" tabindex="-1" role="dialog" aria-labelledby="Receta1Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Receta1Title">Pollo con verduras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container p-4">
          <div class="row">
            <div class="col-md-6"><img src="../../assets/img/productos/a1.jpg" alt="" width="100%" class="rounded-lg" /></div>
            <div class="col-md-6">
              <h5>Ingredientes</h5>
              <h6>1/2 libra arveja
                <h6>1/2 coliflor</h6>
                <h6>1/2 pimentón</h6>
                <h6>1 pechuga mediana</h6>
                <h6>1 cebolla cabezona</h6>
                <h6>1/2 zanahoria</h6>
                <h6>2 rajas apio</h6>
                <h6>3 dientes ajo</h6>
                <h6>Salsa soya</h6>
            </div>
            <div class="col-md-12">
              <h5>Pasos</h5>
              <h6>1</h6>
              Cocinar las arvejas y la coliflor por 15 minutos
              <h6>2</h6>
              Alistar el pollo crudo en cuadritos y en tiras pimentón, zanahoria, apio, cebolla y ajo
              <h6>3</h6>
              Poner a sofreír el pollo con la cebolla y el ajo finamente picado
              <h6>4</h6>
              Cuando ya esté doradito agregar el pimentón, zanahoria, apio y dejar sofreír por 10 minutos
              <h6>5</h6>
              Agregar la arveja y la coliflor y sazonar con salsa soya cocinar por 5 minutos más mientras se incorporan todos los ingredientes y listo 😋😋
            </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Modal 2-->
<div class="modal fade" id="Receta2" tabindex="-1" role="dialog" aria-labelledby="Receta2Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Receta2Title">Pollo con verduras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container p-4">
          <div class="row">
            <div class="col-md-6"><img src="../../assets/img/productos/a2.jpg" alt="" width="100%" class="rounded-lg" /></div>
            <div class="col-md-6">
              <h5>Ingredientes</h5>
              <h6>2 tomates (verde y rojo)</h6>
                <h6>1 aguacate</h6>
                <h6>1 limón</h6>
                <h6>1/2 pepino cohombro</h6>
                <h6>1/2 coliflor</h6>
            </div>
            <div class="col-md-12">
              <h5>Pasos</h5>
              <h6>1</h6>
              Cortar todos los ingredientes
              <h6>2</h6>
              Tomates y pepino en rodajas, brócoli se dividen los arbolitos, y el aguacate en cuadros
              <h6>3</h6>
              Sazonar con limón y sal (opciolal)
            </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Modal 3-->
<div class="modal fade" id="Receta3" tabindex="-1" role="dialog" aria-labelledby="Receta3Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Receta3Title">Pollo con verduras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container p-4">
          <div class="row">
            <div class="col-md-6"><img src="../../assets/img/productos/a3.jpg" alt="" width="100%" class="rounded-lg" /></div>
            <div class="col-md-6">
              <h5>Ingredientes</h5>
              <h6>1/2 libra arveja
                <h6>1/2 coliflor</h6>
                <h6>1/2 pimentón</h6>
                <h6>1 pechuga mediana</h6>
                <h6>1 cebolla cabezona</h6>
                <h6>1/2 zanahoria</h6>
                <h6>2 rajas apio</h6>
                <h6>3 dientes ajo</h6>
                <h6>Salsa soya</h6>
            </div>
            <div class="col-md-12">
              <h5>Pasos</h5>
              <h6>1</h6>
              Cocinar la pasta capellini y pesar 400 gramos, 200 gr. por porción. Sellar en la cda. de aceite de oliva, la pasta de ajo, la cebolla y
              el pimentón cortado en cuadritos. Añadir el tomate cortado en cubos. Mezclar bien, adicionar la sal, especias y rectificar sabor...
              <h6>2</h6>
              Agregar la pasta, el cilantro y mezclar con cuidado hasta integrar bien los ingredientes. Rectificar sabor. Servir, espolvorear más cilantro,
              tabasco, un pelín de aceite de oliva al gusto y queso parmesano.
              <h6>3</h6>
              Disfrutar así de cerquita. De mi cocina con placer...!intentarlo en casa, súper fácil y rápido😋
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 4-->
<div class="modal fade" id="Receta4" tabindex="-1" role="dialog" aria-labelledby="Receta4Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Receta4Title">Pollo con verduras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container p-4">
          <div class="row">
            <div class="col-md-6"><img src="../../assets/img/productos/a4.jpg" alt="" width="100%" class="rounded-lg" /></div>
            <div class="col-md-6">
              <h5>Ingredientes</h5>
              <h6>2 filetes pequeños de merluza</h6>
              <h6>3 palitos surimi</h6>
              <h6>6 limones, su jugo</h6>
              <h6>1 cdta. de pasta de ajo</h6>
              <h6>1 cebolla morada grande</h6>
              <h6>1 puñado cilantro picado</h6>
              <h6>1/2 cdta. de pimienta picante</h6>
              <h6>1-2 cdas. aceite de oliva</h6>
              <h6>1 zanahoria grande rallada</h6>
              <h6>1/2 lechuga</h6>
              <h6>al gusto Sal</h6>
            </div>
            <div class="col-md-12">
              <h5>Pasos</h5>
              <h6>1</h6>
              Lavar y limpiar bien los filetes de merluza, cortarlos en cubos pequeños. Cortar los palitos de surimi, la cebolla en plumas,
              el cilantro bien menudito, añadir el jugo de los limones, la sal, la pimienta, rectificar sabor, en lo posible, que el jugo de
              limón, tape los cubos de merluza y surimi para el marinado. Agregar el aceite de oliva. Mezclar muy bien.
              <h6>2</h6>
              En una fuente amplia, armar la cama con la lechuga cortada en juliana y la zanahoria rallada, rallo grueso. Como se aprecia en
              la fotografía. Colocar el ceviche arriba para servir. Llevar a la nevera hasta el momento de comer bien frío, acompañar con galletas
              de soda, de mi cocina, con placer.😍😍
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 5-->
<div class="modal fade" id="Receta5" tabindex="-1" role="dialog" aria-labelledby="Receta5Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Receta5Title">Pollo con verduras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container p-4">
          <div class="row">
            <div class="col-md-6"><img src="../../assets/img/productos/a5.jpg" alt="" width="100%" class="rounded-lg" /></div>
            <div class="col-md-6">
              <h5>Ingredientes</h5>
              <h6>1 filete tilapia</h6>
              <h6>Melón</h6>
              <h6>Ajo</h6>
              <h6>Limón</h6>
              <h6>Sal y pimienta</h6>
              <h6>Orégano</h6>
              <h6>Perejil (deshidratado preferiblemente)</h6>
              <h6>Pepino o en su defecto, calabacín verde(zucchini, zapallo italiano)</h6>
              <h6>Lechuga</h6>
              <h6>Aceite de oliva</h6>
              <h6>Limón</h6>
            </div>
            <div class="col-md-12">
              <h5>Pasos</h5>
              <h6>1</h6>
              Para el pescado, primero sazona la tilapia, con ajo, pimienta y sal. agrega orégano y perejil al gusto. Luego colócala a fuego lento
              <h6>2</h6>
              Pela y pica la Porción de melón que desees en cuadritos, pica la lechuga, el pepino, agrega limón, sal (a mi me gusta, en lo personal, la sal marina) agrega el limón y el aceite de oliva(un chorrito)
              <h6>3</h6>
              Y listo! A disfrutar. Buen apetito!!
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 6-->
<div class="modal fade" id="Receta6" tabindex="-1" role="dialog" aria-labelledby="Receta6Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Receta6Title">Pollo con verduras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container p-4">
          <div class="row">
            <div class="col-md-6"><img src="../../assets/img/productos/a6.jpg" alt="" width="100%" class="rounded-lg" /></div>
            <div class="col-md-6">
              <h5>Ingredientes</h5>
              <h6>250 grs. guisantes verdes</h6>
              <h6>200 grs. garbanzos cocidos al dente</h6>
              <h6>8 espárragos</h6>
              <h6>3 cdas. aceite de oliva</h6>
              <h6>1 cda. pasta de ajo</h6>
              <h6>al gusto Sal</h6>
            </div>
            <div class="col-md-12">
              <h5>Pasos</h5>
              <h6>1</h6>
              El tiempo no incluye cocción de los garbanzos. Cocinar los guisantes congelados en agua hirviendo con sal, con los espárragos, una vez limpios y cortados.
              Hasta cuando estén tiernos, unos 15 minutos. Filtrarlos y secarlos. Secar los garbanzos, calentar el aceite y añadir los garbanzos, freírlos hasta cuando
              estén dorados, retirarlos del aceite y escurrir el aceite en un colador. Añadir sal al gusto. En una cucharada de aceite de oliva, sellar el ajo y antes
              de que se dore añadir...
              <h6>2</h6>
              Los guisantes y espárragos. Agregar sal al gusto. Servir caliente con los garbanzos y disfrutar. De querer, añadir un poco de salsa de tomate. De mi cocina con placer😍😍
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>