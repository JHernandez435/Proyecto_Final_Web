<?php
require_once "controlador/productosControlador.php";
require_once "modelos/productosModelo.php";
?>

<?php
if (isset($_GET["producto"])) {

    $idProducto = $_GET["producto"];
    $objProducto = productosControlador::fnCtrCargarProductosActivo($idProducto);
    $codigo = $objProducto["codigo"];
    $nombre = $objProducto["nombre"];
    $precio = $objProducto["precio"];
    $cantidad = $objProducto["cantidad"];
    $envoltura = $objProducto["envoltura"];
    $descripcion = $objProducto["descripcion"];
    $urlimagen = $objProducto["urlimagen"];



?>



    <!DOCTYPE html>
    <html lang="en">

    <!-- Mirrored from flatable.phoenixcoded.net/default/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 12:19:46 GMT -->

    <head>
        <title>Proyecto | Cliente</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Phoenixcoded">
        <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
        <meta name="author" content="Phoenixcoded">

        <!-- <link rel="icon" href="vistas/images/favicon.ico" type="image/x-icon"> -->

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="vistas/bower_components/jquery-bar-rating/dist/themes/bars-1to10.css">
        <link rel="stylesheet" type="text/css" href="vistas/bower_components/jquery-bar-rating/dist/themes/bars-horizontal.css">
        <link rel="stylesheet" type="text/css" href="vistas/bower_components/jquery-bar-rating/dist/themes/bars-movie.css">
        <link rel="stylesheet" type="text/css" href="vistas/bower_components/jquery-bar-rating/dist/themes/bars-pill.css">
        <link rel="stylesheet" type="text/css" href="vistas/bower_components/jquery-bar-rating/dist/themes/bars-reversed.css">
        <link rel="stylesheet" type="text/css" href="vistas/bower_components/jquery-bar-rating/dist/themes/bars-square.css">
        <link rel="stylesheet" type="text/css" href="vistas/bower_components/jquery-bar-rating/dist/themes/css-stars.css">

        <link rel="stylesheet" type="text/css" href="vistas/bower_components/slick-carousel/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="vistas/bower_components/slick-carousel/slick/slick-theme.css">

        <link rel="stylesheet" type="text/css" href="vistas/icon/themify-icons/themify-icons.css">

        <link rel="stylesheet" type="text/css" href="vistas/icon/icofont/css/icofont.css">

        <link rel="stylesheet" type="text/css" href="vistas/pages/flag-icon/flag-icon.min.css">

        <link rel="stylesheet" type="text/css" href="vistas/pages/menu-search/css/component.css">

        <link rel="stylesheet" type="text/css" href="vistas/css2/style.css">

        <link rel="stylesheet" type="text/css" href="vistas/css2/color/color-1.css" id="color" />
        <link rel="stylesheet" type="text/css" href="vistas/css2/linearicons.css">
        <link rel="stylesheet" type="text/css" href="vistas/css2/simple-line-icons.css">
        <link rel="stylesheet" type="text/css" href="vistas/css2/ionicons.css">
        <link rel="stylesheet" type="text/css" href="vistas/css2/jquery.mCustomScrollbar.css">

        <!-- LINKS PERSONALIZADOS -->
        <link rel="stylesheet" type="text/css" href="vistas/css/scroll.css">



    </head>

    <body>

        <div class="theme-loader">
            <div class="ball-scale">
                <div></div>
            </div>
        </div>

        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                <nav class="navbar header-navbar pcoded-header" header-theme="theme4">
                    <div class="navbar-wrapper">
                        <div class="navbar-logo">
                            <a class="mobile-menu" id="mobile-collapse" href="#!">
                                <i class="ti-menu"></i>
                            </a>
                            <a class="mobile-search morphsearch-search" href="#">
                                <i class="ti-search"></i>
                            </a>
                            <a href="index.php">
                                <img class="img-fluid" src="images/logo.png" width="200" height="120" alt="Theme-Logo" />
                            </a>
                            <a class="mobile-options">
                                <i class="ti-more"></i>
                            </a>
                        </div>
                        <div class="navbar-container container-fluid">
                            <div>
                                <ul class="nav-left">
                                    <li>
                                        <a class="main-search morphsearch-search" href="#">

                                            <i class="ti-search"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" onclick="javascript:toggleFullScreen()">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>
                                    <li class="mega-menu-top">
                                        <a href="#">
                                            Mega
                                            <i class="ti-angle-down"></i>
                                        </a>
                                        <ul class="show-notification row">
                                            <li class="col-sm-3">
                                                <h6 class="mega-menu-title">Regalos Populares</h6>
                                                <ul class="mega-menu-links">
                                                    <li><a href="form-elements-component.html"> </a></li>
                                                    <li><a href="button.html">1.Tecnologia</a></li>
                                                    <li><a href="map-google.html">2.Acesorios para Niños</a></li>
                                                    <li><a href="user-card.html">3. Decoraciones </a></li>
                                                    <li><a href="user-card.html">4. Juguetes </a></li>
                                                    <li><a href="user-card.html">5. Portaretratos </a></li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <h6 class="mega-menu-title">Buzón </h6>
                                                <ul class="mega-mailbox">
                                                    <li>
                                                        <a href="#" class="media">
                                                            <div class="media-left">
                                                                <i class="ti-folder"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Seguridad </h5>
                                                                <small class="text-muted">Datos </small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="media">
                                                            <div class="media-left">
                                                                <i class="ti-headphone-alt"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Apoyo </h5>
                                                                <small class="text-muted">Soporte las 24 horas </small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="media">
                                                            <div class="media-left">
                                                                <i class="ti-dropbox"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Envios </h5>
                                                                <small class="text-muted">Los diferentes envios son Seguros.
                                                                </small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="media">
                                                            <div class="media-left">
                                                                <i class="ti-location-pin"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Localización</h5>
                                                                <small class="text-muted">Encuentrenos facilmente con tan solo un ¡Clic! </small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <h6 class="mega-menu-title">Galeria</h6>
                                                <div class="row m-b-20">
                                                    <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="images/mega-menu/01.jpg" alt="Gallery-1">
                                                    </div>
                                                    <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="images/mega-menu/02.jpg" alt="Gallery-2">
                                                    </div>
                                                    <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="images/mega-menu/03.jpg" alt="Gallery-3">
                                                    </div>
                                                </div>
                                                <div class="row m-b-20">
                                                    <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="images/mega-menu/04.jpg" alt="Gallery-4">
                                                    </div>
                                                    <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="images/mega-menu/05.jpg" alt="Gallery-5">
                                                    </div>
                                                    <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="images/mega-menu/06.jpg" alt="Gallery-6">
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary btn-sm btn-block">Navegar Galería </button>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <ul class="nav-right">
                                    <li class="header-notification">
                                        <a href="#!">
                                            <i class="ti-bell"></i>
                                            <span class="badge">0</span>
                                        </a>
                                    </li>
                                    <li class="header-notification">
                                        <a href="#!" class="displayChatbox">
                                            <img class="img-fluid" src="images/logo.gif" width="65" height="65" alt="Theme-Logo" />
                                            <span>ÚNETENOS!</span>
                                        </a>
                                    </li>
                                </ul>

                                <div id="morphsearch" class="morphsearch">
                                    <form class="morphsearch-form">
                                        <input class="morphsearch-input" type="search" placeholder="Search..." />
                                        <button class="morphsearch-submit" type="submit">Search</button>
                                    </form>
                                    <div class="morphsearch-content">
                                        <div class="dummy-column">
                                            <h2>Gente </h2>
                                            <a class="dummy-media-object" href="#!">
                                                <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&amp;d=identicon&amp;r=G" alt="Sara Soueidan" />
                                                <h3>Sara Soueidan</h3>
                                            </a>
                                            <a class="dummy-media-object" href="#!">
                                                <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&amp;d=identicon&amp;r=G" alt="Shaun Dona" />
                                                <h3>Shaun Dona</h3>
                                            </a>
                                        </div>
                                        <div class="dummy-column">
                                            <h2>Popular</h2>
                                            <a class="dummy-media-object" href="#!">
                                                <img src="images/avatar-1.png" alt="PagePreloadingEffect" />
                                                <h3>Page Preloading Effect</h3>
                                            </a>
                                            <a class="dummy-media-object" href="#!">
                                                <img src="images/avatar-1.png" alt="DraggableDualViewSlideshow" />
                                                <h3>Draggable Dual-View Slideshow</h3>
                                            </a>
                                        </div>
                                        <div class="dummy-column">
                                            <h2>Recent</h2>
                                            <a class="dummy-media-object" href="#!">
                                                <img src="images/avatar-1.png" alt="TooltipStylesInspiration" />
                                                <h3>Tooltip Styles Inspiration</h3>
                                            </a>
                                            <a class="dummy-media-object" href="#!">
                                                <img src="images/avatar-1.png" alt="NotificationStyles" />
                                                <h3>Notification Styles Inspiration</h3>
                                            </a>
                                        </div>
                                    </div>

                                    <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </nav>

                <div id="sidebar" class="users p-chat-user showChat">
                    <div class="page-body">

                        <div class="j-wrapper j-wrapper-400">

                            <form action="" method="post" class="j-pro" id="j-pro" novalidate>
                                <div class="logo text-center">
                                    <a href="#">
                                        <img src='images/animation_500_kltje2s1.gif' class='imgRedonda' ¿ />
                                    </a>
                                </div>
                                <center>
                                    <h5>Iniciar Sesion</h5>
                                </center>

                                <div class="j-content">
                                    <div class="j-unit">
                                        <div class="j-input">
                                            <label class="j-icon-right" for="usuario">
                                                <i class="icofont icofont-ui-user"></i>
                                            </label>
                                            <input type="text" id="usuario" name="usuario" placeholder="Usuario">
                                        </div>
                                    </div>
                                    <div class="j-unit">
                                        <div class="j-input">
                                            <label class="j-icon-right" for="password">
                                                <i class="icofont icofont-lock"></i>
                                            </label>
                                            <input type="password" id="password" name="password" placeholder="Contraseña">
                                            <span class="j-hint">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="j-unit">
                                        <div class="g-recaptcha" data-sitekey="6LeV7gwUAAAAAKOX-B12lNcg1ids8dFylMP6XihO"></div>
                                    </div>
                                    <div class="j-response"></div>
                                </div>
                                <div class="j-footer">
                                    <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="showChat_inner">
                    <div class="media chat-inner-header">
                        <a class="back_chatBox">
                            <i class="icofont icofont-rounded-left"></i> Josephin Doe
                        </a>
                    </div>
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-circle m-t-5" src="images/avatar-1.png" alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                                <p class="chat-time">8:20 a.m.</p>
                            </div>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <div class="media-body chat-menu-reply">
                            <div class="">
                                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                                <p class="chat-time">8:20 a.m.</p>
                            </div>
                        </div>
                        <div class="media-right photo-table">
                            <a href="#!">
                                <img class="media-object img-circle m-t-5" src="images/avatar-2.png" alt="Generic placeholder image">
                            </a>
                        </div>
                    </div>
                    <div class="chat-reply-box p-b-20">
                        <div class="right-icon-control">
                            <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                            <div class="form-icon">
                                <i class="icofont icofont-paper-plane"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">


                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">

                                <div class="main-body">
                                    <div class="page-wrapper">

                                        <div class="page-header">
                                            <div class="page-header-title">
                                                <h4>Detalle Del Producto</h4>
                                            </div>
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="index.php">
                                                            <i class="icofont icofont-home"></i>
                                                        </a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="index.php#myTabContent">Inicio</a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#">Detalles Regalo</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>


                                        <div class="page-body">
                                            <div class="row">
                                                <div class="col-md-12">

                                                    <div class="card product-detail-page">
                                                        <div class="card-block">
                                                            <div class="row">

                                                                <div class="col-lg-5 col-xs-12">
                                                                    <div class="port_details_all_img row">

                                                                        <div class="col-lg-12">

                                                                            <?php
                                                                            if (isset($_GET["envoltura"])) {

                                                                                $envoltura = $_GET["envoltura"];
                                                                                $objProducto = productosControlador::fnCtrCargarEnvolturaActivo($envoltura);
                                                                            ?>

                                                                                <div id="big_banner">
                                                                                    <?php
                                                                                    foreach ($objProducto as $key => $value) {
                                                                                        $urlimagenE = $value["urlimagenE"];
                                                                                        echo '<div  class="port_big_img">
                                                                                        <center><img class="img img-fluid" src=' . $urlimagenE . ' width="350" ></center>
                                                                                    </div>';
                                                                                    }
                                                                                    ?>
                                                                                </div>

                                                                        </div>
                                                                        <div class="col-lg-12 product-right">

                                                                            <div id="small_banner">
                                                                                <?php
                                                                                foreach ($objProducto as $key => $value) {
                                                                                    $urlimagenE = $value["urlimagenE"];
                                                                                    echo '<div>
                                                                                    <img class="img img-fluid" src=' . $urlimagenE . ' alt="small-details">
                                                                                </div>';
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php
                                                                            }
                                                            ?>
                                                            <div class="col-lg-7 col-xs-12 product-detail" id="product-detail">
                                                                <div class="row">
                                                                    <div>
                                                                        <div class="col-lg-12">
                                                                            <span class="txt-muted d-inline-block">Código de producto: <a href="#!"> <?php echo $codigo; ?> </a> </span>
                                                                            <span class="f-right">Disponibilidad : <a href="#!"> En stock </a> </span>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <h4 class="pro-desc"><?php echo $nombre; ?></h4>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <span class="txt-muted"> Marca: Denim </span>
                                                                        </div>
                                                                        <div class="stars stars-example-css m-t-15 detail-stars col-lg-12">
                                                                            <select id="product-view" class="rating-star" name="rating" autocomplete="off">
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <span class="text-primary product-price"><i class="icofont icofont-cur-dollar"></i><?php echo $precio; ?></span> <span class="done-task txt-muted">$9.999</span>
                                                                            <hr>
                                                                            <p><?php echo $descripcion; ?>
                                                                            </p>
                                                                            <hr>
                                                                            <h6 class="f-16 f-w-600 m-t-10 m-b-10"><?php echo $cantidad; ?></h6>
                                                                        </div>
                                                                        <div class="col-xl-3 col-sm-12">
                                                                            <div class="p-l-0 m-b-25">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-btn">
                                                                                        <button type="button" class="btn btn-default btn-number shadow-none" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                                                            <span class="icofont icofont-minus m-0"></span>
                                                                                        </button>
                                                                                    </span>
                                                                                    <input type="text" name="quant[1]" class="form-control input-number text-center" value="<?php echo $cantidad; ?>">
                                                                                    <span class="input-group-btn">
                                                                                        <button type="button" class="btn btn-default btn-number shadow-none" data-type="plus" data-field="quant[1]">
                                                                                            <span class="icofont icofont-plus m-0"></span>
                                                                                        </button>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                            <div class="col-xl-3 col-sm-12">
                                                                                <textarea placeholder="Mensaje | Targeta" cols="40" rows="5" ></textarea>
                                                                            </div>
                                                                        <div class="col-lg-12 col-sm-12 mob-product-btn">
                                                                            <button id="btn-Comprar" idproductos="<?php echo $idProducto; ?>" codigo="<?php echo $codigo; ?>" cantidad="<?php echo $cantidad; ?>" nombre="<?php echo $nombre; ?>" precio="<?php echo $precio; ?>" urlimagen="<?php echo $urlimagen; ?>" type="button" class="btn btn-primary waves-effect waves-light m-r-20">
                                                                                <i class="icofont icofont-cart-alt f-16"></i><span class="m-l-10">Agregar Carrito</span>
                                                                            </button>
                                                                            <button id="btn-Carrito" producto="<?php echo $idProducto; ?>" type="button" class="btn btn-outline-primary waves-effect waves-light m-r-20">
                                                                                <i class="icofont icofont-heart-alt f-16 m-0"></i>
                                                                            </button>
                                                                            <button type="button" class="btn btn-outline-primary waves-effect waves-light">
                                                                                <i class="icofont icofont-eye-alt f-16 m-0"></i>
                                                                            </button>
                                                                        </div>

                                                                    </div>
                                                                    <div align="right"><img src="<?php echo $urlimagen; ?>" width="150" height="150"></div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="card product-detail-page">
                                                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active f-18 p-b-0" data-toggle="tab" href="#description" role="tab">Avisos Legales </a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item m-b-0">
                                                        <a class="nav-link f-18 p-b-0" data-toggle="tab" href="#review" role="tab">Garantía</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item m-b-0">
                                                        <a class="nav-link f-18 p-b-0" data-toggle="tab" href="#sizeguide" role="tab">Guia de Pago </a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item m-b-0">
                                                        <a class="nav-link f-18 p-b-0" data-toggle="tab" href="#about" role="tab">Envios </a>
                                                        <div class="slide"></div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="card">
                                                <div class="card-block">

                                                    <div class="tab-content bg-white">
                                                        <div class="tab-pane active" id="description" role="tabpanel">
                                                            <p>Paga con Tarjeta de Crédito sin ningún incremento. ⛔ ATENCIÓN: Debido al alto flujo de Compras Fraudulentas es necesario por seguridad que después de haber hecho la compra nos envíe una Foto de la tarjeta de crédito con la que hizo su compra donde se vea ÚNICAMENTE los últimos 4 dígitos del número de la Tarjeta y que se vea el Nombre del titular.</p>
                                                            <p>Si por algún motivo no desea enviar la validación de seguridad por favor absténgase de realizar la compra con Tarjeta de Crédito o elija otro medio de pago. Los datos de facturación del producto deben coincidir con los datos del titular de la tarjeta, de lo contrario el Titular de la tarjeta debe enviar una carta firmada autorizando la compra.</p>
                                                        </div>
                                                        <div class="tab-pane" id="review" role="tabpanel">
                                                            <p>1.Los periodos de garantía de los productos comercializados por Giving Away varían según la referencia.</p>
                                                            <p>2.La garantía cubre únicamente defectos de fabricación.</p>
                                                            <p>3.La garantía no cubre daños accidentales o aquellas fallas mecánicas y operacionales causadas por accidentes</p>
                                                            <p>4.a garantía se anula en caso de que el regalo sea abierto por personal no autorizado o se rompan los sellos de seguridad de este.</p>
                                                            <p>5.Al momento de entregar el producto por garantía, el consumidor debe indicar el motivo o defecto de este al correo electrónico givinaway@gmail.com</p>
                                                        </div>
                                                        <div class="tab-pane" id="sizeguide" role="tabpanel">
                                                            <img align="right" src="images/payu.jpg" class="img-thumbnail" alt="Standard Gallery">
                                                            <p>1.Primero, selecciona la opción Pagar la cual te redirijira a la plataforma de PayU.</p>
                                                            <p>2.Seguidamente introduce tus datos personales los cuales seran nombre y apellido.</p>
                                                            <p>3.Luego el sistema mostrara medios de pago los cuales debera seleccionar el que mas prefiera.</p>
                                                            <p>4.finalmente acepte los terminos y condiciones y de clic en pagar.</p>
                                                        </div>
                                                        <div class="tab-pane" id="about" role="tabpanel">
                                                            <img align="right" width="300" src="images/servientrega1.jpg" class="img-thumbnail" alt="Standard Gallery">
                                                            <p>Contamos con uno de los mejores sevicio de Entrega.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript" src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="vistas/bower_components/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="vistas/bower_components/tether/dist/js/tether.min.js"></script>
        <script type="text/javascript" src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="vistas/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

        <script type="text/javascript" src="vistas/bower_components/modernizr/modernizr.js"></script>
        <script type="text/javascript" src="vistas/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

        <script type="text/javascript" src="vistas/bower_components/classie/classie.js"></script>

        <script type="text/javascript" src="vistas/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
        <script type="text/javascript" src="vistas/pages/rating/rating.js"></script>

        <script type="text/javascript" src="vistas/bower_components/slick-carousel/slick/slick.min.js"></script>

        <script type="text/javascript" src="vistas/pages/product-detail/product-detail.js"></script>

        <script type="text/javascript" src="vistas/bower_components/i18next/i18next.min.js"></script>
        <script type="text/javascript" src="vistas/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
        <script type="text/javascript" src="vistas/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
        <script type="text/javascript" src="vistas/bower_components/jquery-i18next/jquery-i18next.min.js"></script>

        <script type="text/javascript" src="vistas/js2/script.js"></script>
        <script src="vistas/js2/demo-12.js"></script>
        <script src="vistas/js2/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="vistas/js2/jquery.mousewheel.min.js"></script>

        <!-- LINLS PERSONALIZADOS -->
        <script type="text/javascript" src="vistas/js/tienda.js"></script>

    </body>

    </html>

<?php

}


?>